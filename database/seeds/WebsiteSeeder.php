<?php

use App\Type;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Création des Types
        $donnees = [
            (object)['nom' => 'Seminaire'],
        ];

        foreach ($donnees as $donnee) {
            Type::create([
                'nom' => $donnee->nom,
                'seeder' => 'WebsiteSeeder',
            ]);
        }
    }
}
