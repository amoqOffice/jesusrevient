<?php

use App\Responsable;
use Illuminate\Database\Seeder;

class ResponsablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $responsables = [
            (object)[
                'nom' => 'Jean-Gratien',
                'poste' => 'Evangeliste',
                'contact' => '+229 97 25 35 39',
            ],
            (object)[
                'nom' => 'Paul',
                'poste' => 'Apotre',
                // 'email' => '',
                'contact' => '+229 67 01 74 87',
            ],
            (object)[
                'nom' => 'Etienne',
                'poste' => 'Prophete',
                // 'email' => '',
                'contact' => '+229 97 92 30 32',
            ],
            (object)[
                'nom' => 'Silas',
                'poste' => 'Docteur',
                // 'email' => '',
                'contact' => '+229 67 96 00 94',
            ],
            (object)[
                'nom' => 'Appolos',
                'poste' => 'Pasteur',
                // 'email' => '',
                'contact' => '+229 60 42 72 80',
            ],
        ];

        foreach ($responsables as $responsable) {
            Responsable::create([
                'nom' => $responsable->nom,
                'poste' => $responsable->poste,
                'contact' => $responsable->contact,
            ]);
        }
    }
}
