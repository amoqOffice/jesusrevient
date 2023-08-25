<?php

use Alaouy\Youtube\Facades\Youtube;
use App\Activite;
use App\Categorie;
use App\Code;
use App\Eglise;
use App\Responsable;
use App\Rubrique;
use App\Tag;
use App\Type;
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
        // Youtube api key
        Youtube::setApiKey('AIzaSyAt7PLp7wU-50-FfsbRRIOqFO8nyzs2dmA');

        // Liste des Types
        $type_bapteme = Type::where('nom', 'Bapteme')->first();
        $type_culte = Type::where('nom', 'Culte')->first();
        $type_delivrance = Type::where('nom', 'Delivrance')->first();
        $type_enseignement = Type::where('nom', 'Enseignement')->first();
        $type_evangelisation = Type::where('nom', 'Evangelisation')->first();
        $type_predication = Type::where('nom', 'Predication')->first();
        $type_prophetie = Type::where('nom', 'Prophetie')->first();
        $type_priere = Type::where('nom', 'Priere')->first();
        $type_temoignage = Type::where('nom', 'Temoignage')->first();

        // Liste des Catégories
        $categorie_foi = Categorie::where('nom', ('La Foi'))->first();
        $categorie_amour = Categorie::where('nom', ("L'amour"))->first();
        $categorie_oeuvreSaintEsprit = Categorie::where('nom', ("L'oeuvre du Saint-Esprit"))->first();
        $categorie_saineDoctrine = Categorie::where('nom', ("La Saine doctrine"))->first();
        $categorie_sanctification = Categorie::where('nom', ("La Sanctification"))->first();
        $categorie_mariage = Categorie::where('nom', ("Le Mariage"))->first();
        $categorie_peche = Categorie::where('nom', ("Le Péché"))->first();
        $categorie_salut = Categorie::where('nom', ("Le Salut"))->first();
        $categorie_priere = Categorie::where('nom', ("La Prière"))->first();
        $categorie_crainteDeDieu = Categorie::where('nom', ("La Crainte de Dieu"))->first();

        // Liste des Tags
        $tag_foi = Tag::where('nom', ("Foi"))->first();
        $tag_amour = Tag::where('nom', ("Amour"))->first();
        $tag_oeuvreSaintEsprit = Tag::where('nom', ("Oeuvre du Saint-Esprit"))->first();
        $tag_saineDoctrine = Tag::where('nom', ("Saine doctrine"))->first();
        $tag_sanctification = Tag::where('nom', ("Sanctification"))->first();
        $tag_mariage = Tag::where('nom', ("Mariage"))->first();
        $tag_peche = Tag::where('nom', ("Péché"))->first();
        $tag_salut = Tag::where('nom', ("Salut"))->first();
        $tag_priere = Tag::where('nom', ("Prière"))->first();
        $tag_crainteDeDieu = Tag::where('nom', ("Crainte de Dieu"))->first();

        // Liste des Eglises
        $eglise_dekoungbe = Eglise::where('nom', 'Eglise JESUS-REVIENT de Dèkoungbé')->first();

        // Liste des Rubriques
        $rubrique_PDV = Rubrique::where('nom', 'Parole de vie')->first();
        $rubrique_QDLSD = Rubrique::where('nom', "Qu'en dit la saine doctrine")->first();
        $rubrique_CLE = Rubrique::where('nom', "Comprendre les écritures")->first();
        $rubrique_AR = Rubrique::where('nom', "Alerte rouge")->first();
        $rubrique_APDS = Rubrique::where('nom', "Au pied du souverain")->first();
        $rubrique_PDS = Rubrique::where('nom', "Parole de sagesse")->first();
        $rubrique_DA = Rubrique::where('nom', "Devançons l'aurore")->first();
        $rubrique_PA = Rubrique::where('nom', "Priere agressive")->first();
        $rubrique_EVG = Rubrique::where('nom', "Allons gagner des âmes")->first();
        $rubrique_DPAP = Rubrique::where('nom', "Du passé au présent")->first();

        // Liste des Responsables
        $responsable_Evg = Responsable::where('nom', 'Jean-Gratien')->first();
        $responsable_Apotre = Responsable::where('nom', 'Paul')->first();
        $responsable_Prophete = Responsable::where('nom', 'Etienne')->first();
        $responsable_Docteur = Responsable::where('nom', 'Silas')->first();
        $responsable_Pasteur = Responsable::where('nom', 'Appolos')->first();

        // Temoignages --------------
        $data = [
            (object)[
                'url' => 'https://youtu.be/XEM23OkJ8LE',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/yoKfcQ00-QU?si=kLR3KQ8WoVlVZYZ5',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/Y8MN7Bi0oM4',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/qz7Yuy7UFbE',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/dVJDQS5smPc',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/D7CSNnpANYk',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/jJ27xPIY9jc',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://www.youtube.com/live/FW4Kq_8aXkY?feature=share',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/Pgnp9UBad-s',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/S154kjw5lyo',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/Kf5aquEUVdo',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/Cw0dBlsoiuI',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://www.youtube.com/live/DjwwNT0OkiU?feature=share',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/xFezHsz4iN0',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://youtu.be/Xdj0yxvEJpY',
                'type' => $type_temoignage,
                'categorie' => '',
                'rubriques' => [$rubrique_DPAP],
                'eglises' => [],
                'event' => false,
                'tags' => [],
                'responsables' => [],
            ],
            (object)[
                'url' => 'https://www.youtube.com/live/GTLslpDUO9E?feature=share',
                'type' => $type_enseignement,
                'categorie' => $categorie_foi,
                'rubriques' => [],
                'eglises' => [],
                'event' => false,
                'tags' => [$tag_foi->id],
                'responsables' => [$responsable_Pasteur->id],
            ],
            (object)[
                'url' => 'https://youtu.be/q3fDtnlhvZM',
                'type' => $type_enseignement,
                'categorie' => $categorie_foi,
                'rubriques' => [],
                'eglises' => [],
                'event' => false,
                'tags' => [$tag_foi->id],
                'responsables' => [$responsable_Evg->id],
            ],
            (object)[
                'url' => 'https://youtu.be/r5jWzoa9xoE',
                'type' => $type_enseignement,
                'categorie' => $categorie_foi,
                'rubriques' => [],
                'eglises' => [],
                'event' => false,
                'tags' => [$tag_foi->id],
                'responsables' => [$responsable_Pasteur->id],
            ],
            (object)[
                'url' => 'https://youtu.be/3rz6KDAlQR8',
                'type' => $type_enseignement,
                'categorie' => $categorie_foi,
                'rubriques' => [],
                'eglises' => [],
                'event' => false,
                'tags' => [$tag_foi->id],
                'responsables' => [$responsable_Pasteur->id],
            ],
            (object)[
                'url' => 'https://youtu.be/usyXTWK_bdk',
                'type' => $type_enseignement,
                'categorie' => $categorie_amour,
                'rubriques' => [],
                'eglises' => [],
                'event' => false,
                'tags' => [$tag_amour->id],
                'responsables' => [$responsable_Docteur->id],
            ],
            (object)[
                'url' => 'https://youtu.be/ZFO1dSyvlSo',
                'type' => $type_enseignement,
                'categorie' => $categorie_amour,
                'rubriques' => [],
                'eglises' => [],
                'event' => false,
                'tags' => [$tag_amour->id],
                'responsables' => [$responsable_Docteur->id],
            ],
            (object)[
                'url' => 'https://youtu.be/aiNxCJ0gVHE',
                'type' => $type_enseignement,
                'categorie' => $categorie_amour,
                'rubriques' => [],
                'eglises' => [],
                'event' => false,
                'tags' => [$tag_amour->id],
                'responsables' => [$responsable_Docteur->id],
            ],
            (object)[
                'url' => 'https://youtu.be/vWQSZlOYX4c',
                'type' => $type_enseignement,
                'categorie' => $categorie_amour,
                'rubriques' => [],
                'eglises' => [],
                'event' => false,
                'tags' => [$tag_amour->id],
                'responsables' => [$responsable_Docteur->id],
            ],
        ];

        foreach ($data as $youtube_video) {
            $videoUrl = $youtube_video->url;
            $video = Youtube::getVideoInfo(getYoutubeVideoId($videoUrl));
            $bestThumbnail = getBestYouTubeThumbnail($videoUrl);

            // dd($youtube_video->event);
            // Génération de created_at
            $date = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i:s\Z', $video->snippet->publishedAt, 'UTC');
            $date->setTimezone('Europe/Paris');
            $timestamp = $date->toDateTimeString();

            // Enregistremnt dans la bdd
            $activite = Activite::create([
                'titre' => $video->snippet->title,
                'lieu'=> '',
                'img'=> $bestThumbnail,
                'url'=> $youtube_video->url,
                'description'=> $video->snippet->description,
                'date_deb'=> date('Y-m-d', strtotime($timestamp)),
                'date_fin'=> date('Y-m-d', strtotime($timestamp)),
                'created_at'=> $timestamp,
                'updated_at'=> $timestamp,
                'type_id'=> ($youtube_video->type == '') ? null : $youtube_video->type->id,
                'categorie_id' => ($youtube_video->categorie == '') ? null : $youtube_video->categorie->id,
                'isEvent' => (boolean)$youtube_video->event,
                'seeder' => 'ActivitesTableSeeder',
            ]);

            // // Les associations
            ($youtube_video->categorie) ? $youtube_video->categorie->activites()->save($activite) : ''; // Categorie

            count($youtube_video->eglises) ? $activite->eglises()->attach($youtube_video->eglises) : ''; // Eglise

            count($youtube_video->tags) ? $activite->tags()->attach($youtube_video->tags) : ''; // Tag

            ($youtube_video->type) ? $youtube_video->type->activites()->save($activite) : ''; // Type

            count($youtube_video->responsables) ? $activite->responsables()->attach($youtube_video->responsables) : ''; // Responsable

            count($activite->rubriques) > 0 ? $activite->rubriques()->attach($youtube_video->rubriques) : ''; // Rubrique
        }
    }
}
