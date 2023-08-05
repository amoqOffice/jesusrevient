<?php

use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Database\Seeder;

class ActivitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Youtube::setApiKey('AIzaSyAt7PLp7wU-50-FfsbRRIOqFO8nyzs2dmA'); // Youtube api key
        // Clé de la playlist ENSEIGNEMENT
        $playlistId = 'PLSpKxRyN4Ds1DU62NywtnFw3sIVKRJL9f'; // Youtube Ense playlist

        // Récuppération de toutes les vidéos dans la playlist
        $videos = [];
        $nextPageToken = null;
        do {
            $playlistItems = Youtube::getPlaylistItemsByPlaylistId($playlistId, $nextPageToken, 50);

            if (isset($playlistItems['results'])) {
                $videos = array_merge($videos, $playlistItems['results']);
            }

            $nextPageToken = $playlistItems['info']['nextPageToken'];
        } while ($nextPageToken);

        // Enregistrement des vidéos dans la table enseignement
        foreach ($videos as $video) {
            if ($video->status->privacyStatus === "public") {
                // Génération de created_at
                $date = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i:s\Z', $video->snippet->publishedAt, 'UTC');
                $date->setTimezone('Europe/Paris');
                $timestamp = $date->toDateTimeString();

                // Enregistremnt dans la bdd
                DB::table('activites')->insert([
                    'titre' => $video->snippet->title,
                    'lieu'=> '',
                    'img'=> $video->snippet->thumbnails->maxres->url ?? $video->snippet->thumbnails->default->url ?? '',
                    'url'=> "https://www.youtube.com/watch?v=".$video->contentDetails->videoId,
                    'description'=> $video->snippet->description,
                    'date_deb'=> '',
                    'date_fin'=> '',
                    'created_at'=> $timestamp,
                    'updated_at'=> $timestamp,
                ]);
            }
        }
    }
}
