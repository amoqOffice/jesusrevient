<?php

use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Database\Seeder;
use App\Activite;
use App\Type;

class ActivitesByPlaylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Youtube api key
        Youtube::setApiKey('AIzaSyAt7PLp7wU-50-FfsbRRIOqFO8nyzs2dmA');

        // Playlist youtube pour le site web
        $youtubeVideos = [
            (object)['nom_type' => 'Enseignement', 'playlist' => 'PLSpKxRyN4Ds0rOYD2f9fNc-n4VNxwJ_Kc'],
            (object)['nom_type' => 'Temoignage', 'playlist' => 'PLSpKxRyN4Ds1FoXB2kUR0cPN53Zgi29y-'],
        ];

        foreach ($youtubeVideos as $youtubeVideo) {
            // Récuppération de toutes les vidéos dans la playlist
            $videos = [];
            $nextPageToken = null;
            do {
                $playlistItems = Youtube::getPlaylistItemsByPlaylistId($youtubeVideo->playlist, $nextPageToken, 50);
                if (isset($playlistItems['results'])) {
                    $videos = array_merge($videos, $playlistItems['results']);
                }

                $nextPageToken = $playlistItems['info']['nextPageToken'];
            } while ($nextPageToken);

            // Reccuperation du Type associcé à l'activite
            $type = Type::where('nom', $youtubeVideo->nom_type)->first();

            // Enregistrement des vidéos dans la table enseignement
            foreach ($videos as $video) {
                if ($video->status->privacyStatus === "public") {
                    // Génération de created_at
                    $date = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i:s\Z', $video->snippet->publishedAt, 'UTC');
                    $date->setTimezone('Europe/Paris');
                    $timestamp = $date->toDateTimeString();

                    // Enregistremnt dans la bdd
                    $activite = Activite::firstOrCreate([
                        'titre' => $video->snippet->title,
                        'lieu'=> '',
                        'img'=> $video->snippet->thumbnails->maxres->url ?? $video->snippet->thumbnails->default->url ?? '',
                        'url'=> "https://www.youtube.com/watch?v=".$video->contentDetails->videoId,
                        'description'=> $video->snippet->description,
                        'date_deb'=> date('Y-m-d', strtotime($video->snippet->publishedAt)),
                        'date_fin'=> date('Y-m-d', strtotime($video->snippet->publishedAt)),
                        'type_id'=> $type->id,
                        'created_at'=> $timestamp,
                        'updated_at'=> $timestamp,
                    ]);

                    // Association avec type
                    // $activite->type()->associate($type);
                    // $activite->save();
                }
            }
        }
    }
}
