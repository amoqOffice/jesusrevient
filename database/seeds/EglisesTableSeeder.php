<?php

use App\Code;
use App\Eglise;
use App\Responsable;
use Illuminate\Database\Seeder;

class EglisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eglises = [
            (object)[
                'nom' => 'Eglise JESUS-REVIENT de Dèkoungbé',
                'indication' => "L'EGLISE PRINCIPALE JESUS-REVIENT EST SITUEE A COTONOU (BENIN), DEKOUNGBE, HEDOMEY",
                'ville' => 'Godomey',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.17202663575!2d2.3167812999999997!3d6.3717789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023571903cc0a0d%3A0xa0177fb570842acb!2sGROUPE%20J%C3%89SUS%20REVIENT!5e0!3m2!1sfr!2sbj!4v1692818298885!5m2!1sfr!2sbj',
                'pays' => 'Bénin',
            ],
        ];

        $responsable_Evg = Responsable::where('nom', 'Jean-Gratien')->first();
        $responsable_Apotre = Responsable::where('nom', 'Paul')->first();
        $responsable_Prophete = Responsable::where('nom', 'Etienne')->first();
        $responsable_Docteur = Responsable::where('nom', 'Silas')->first();
        $responsable_Pasteur = Responsable::where('nom', 'Appolos')->first();

        // Création des eglises avec code unique
        foreach ($eglises as $eglise) {
            $egliseSaved = Eglise::create([
                'nom' => $eglise->nom,
                'indication' => $eglise->indication,
                'ville' => $eglise->ville,
                'map' => $eglise->map,
                'pays' => $eglise->pays,
                'seeder' => 'EglisesTableSeeder',
            ]);

            // Enregistrement du code avec association
            $code = $egliseSaved->code()->create([
                'content' => md5($egliseSaved->id),
            ]);

            // Association du code et lEglise
            $code->eglise()->associate($egliseSaved)->save();
            $egliseSaved->responsables()->attach($responsable_Evg);
            $egliseSaved->responsables()->attach($responsable_Apotre);
            $egliseSaved->responsables()->attach($responsable_Docteur);
            $egliseSaved->responsables()->attach($responsable_Pasteur);
            $egliseSaved->responsables()->attach($responsable_Prophete);
        }
    }
}
