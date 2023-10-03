<?php

use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Database\Seeder;
use App\Activite;
use App\Categorie;
use App\Rubrique;
use App\Tag;
use App\Type;

class ActivitesByPlaylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Consiste à charger dynamiquement les activités (vidéos youtube depuis leur playlist) dans la bdd avec les différentes associations.
     *
     * @return void
     */
    public function run()
    {
        Youtube::setApiKey('AIzaSyAt7PLp7wU-50-FfsbRRIOqFO8nyzs2dmA'); // Youtube api key

        // Step 1: Liste des Playlists youtube pour le site web
        $youtubePlaylists = [
            (object)[
                'nom_playlist' => 'Priere',
                'key_playlist' => 'PLSpKxRyN4Ds0NgWDENbuBi9VDS2KUUMdT',
                'event' => false
            ],
            (object)[
                'nom_playlist' => 'Predication',
                'key_playlist' => 'PLSpKxRyN4Ds2ZxqvLyCBnFVQVoYX1vJTs',
                'event' => false
            ],
            (object)[
                'nom_playlist' => 'Culte',
                'key_playlist' => 'PLSpKxRyN4Ds3_KMV4CfgLFLdny2OB6pNv',
                'event' => true
            ],
            (object)[
                'nom_playlist' => 'Parole de Sagesse',
                'key_playlist' => 'PLSpKxRyN4Ds0rOYD2f9fNc-n4VNxwJ_Kc',
                'event' => false
            ],
        ];

        // Step 2: Enregistrement de chaque video de la playlist dans la table Activite
        // Réccupération de toutes les vidéos dans la playlist
        foreach ($youtubePlaylists as $eachPlaylist) {
            $videosFromYoutubePlaylist = [];
            $nextPageToken = null;

            do {
                $playlistItems = Youtube::getPlaylistItemsByPlaylistId($eachPlaylist->key_playlist, $nextPageToken, 50);
                if (isset($playlistItems['results'])) {
                    $videosFromYoutubePlaylist = array_merge($videosFromYoutubePlaylist, $playlistItems['results']);
                }

                $nextPageToken = $playlistItems['info']['nextPageToken'];
            } while ($nextPageToken); // fais un parcours par page et sauvgarde tout dans une variable

            // Enregistrement des vidéos dans la table Activité
            foreach ($videosFromYoutubePlaylist as $video)
            {
                if ($video->status->privacyStatus === "public")
                {
                    // Génération du timestamp pour l'enregistrment
                    $date = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i:s\Z', $video->snippet->publishedAt, 'UTC');
                    $date->setTimezone('Europe/Paris');
                    $timestamp = $date->toDateTimeString();

                    // Enregistrement dans la bdd
                    $activite = Activite::firstOrCreate([
                        'titre' => $video->snippet->title,
                        'lieu'=> '',
                        'img'=> $video->snippet->thumbnails->maxres->url ?? $video->snippet->thumbnails->default->url ?? '',
                        'url'=> "https://www.youtube.com/watch?v=".$video->contentDetails->videoId,
                        'description'=> $video->snippet->description,
                        'date_deb'=> date('Y-m-d', strtotime($video->snippet->publishedAt)),
                        'date_fin'=> date('Y-m-d', strtotime($video->snippet->publishedAt)),
                        'isEvent' => $eachPlaylist->event,
                        'seeder' => 'ActivitesByPlaylistTableSeeder',
                        'created_at'=> $timestamp,
                        'updated_at'=> $timestamp,
                    ]);

                    $videoId = $video->snippet->resourceId->videoId; // id de la vidéo youtube (activité)

                    // LES ASSOCIATONS
                    // Type
                    $typeActivite = Type::where('nom', $eachPlaylist->nom_playlist)->first();
                    ($typeActivite != null) ? $activite->type()->associate($typeActivite)->save() : '';

                    // Rubrique
                    $rubriqueActivite = Rubrique::where('nom', $eachPlaylist->nom_playlist)->first();
                    ($rubriqueActivite != null) ? $activite->rubriques()->attach($rubriqueActivite->id) : '';

                    // Eglise

                    // Responsable

                    // Condition playlist doit être une Edification
                    $acceptedPlaylists = [
                        'PLSpKxRyN4Ds2ZxqvLyCBnFVQVoYX1vJTs', // Playlist Prédications
                        'PLSpKxRyN4Ds0aToVIg8WyFqATHvRqTfrW', // Playlist Séminaires
                        'PLSpKxRyN4Ds1Gtj-7BuWz43T4xDKvdHY6', // Playlist Soirée d'Enseignement
                        'PLSpKxRyN4Ds34Zs1uzlT_EADBynm5vOfd', // Playlist Qu'en dit la Saine doctrine
                        'PLSpKxRyN4Ds38onYayogz7ywpbszHVrR6', // Playlist Parole vitale
                        'PLSpKxRyN4Ds1_8waHpuTbVQPuosZ73inV', // Playlist Alerte Rouge
                        'PLSpKxRyN4Ds0rOYD2f9fNc-n4VNxwJ_Kc', // Playlist Parole de Sagesse
                        'PLSpKxRyN4Ds3O5PTUcVwAcUiuLXp8aMXE', // Playlist Comprendre les Ecritures
                    ];
                    foreach ($acceptedPlaylists as $acceptedPlaylist)
                    {
                        if ($acceptedPlaylist === $eachPlaylist->key_playlist) {
                            $youtubeVideoTags = getYoutubeVideoTags($videoId);

                            if ($youtubeVideoTags != null) {
                                // Type (Attribue le type Prédication à l'activité)
                                $typeActivite = Type::where('nom', 'Predication')->first();
                                $activite->type()->associate($typeActivite)->save();

                                // Catégorie
                                $categorieActivite = Categorie::where('nom', 'like', "%$youtubeVideoTags[0]%")->firstOrCreate([
                                    'nom' => $youtubeVideoTags[0],
                                    'seeder' => 'ActivitesByPlaylistTableSeeder',
                                ]);
                                ($categorieActivite != null) ? $activite->categorie()->associate($categorieActivite)->save() : '';

                                dump($youtubeVideoTags[0], $videoId);
                            } // Reccupere dynamiquement la catégorie de la vidéo
                        } // Contrôle si la playlist est une Edification
                    }

                    // Tag
                    $youtubeVideoTags = getYoutubeVideoTags($videoId);
                    if ($youtubeVideoTags != null) {
                        $tagActivite = Tag::where('nom', 'like', "%$youtubeVideoTags[0]%")->firstOrCreate([
                            'nom' => $youtubeVideoTags[0],
                            'seeder' => 'ActivitesByPlaylistTableSeeder',
                        ]);
                        ($tagActivite != null) ? $activite->tags()->attach($tagActivite) : '';
                    } // Reccupere dynamiquement la catégorie de la vidéo

                    // Rubrique
                    $rubriqueActivite = Rubrique::where('nom', $eachPlaylist->nom_playlist)->first();
                    ($rubriqueActivite != null) ? $activite->rubriques()->attach($rubriqueActivite->id) : '';
                }
            }
        }
    }
}
