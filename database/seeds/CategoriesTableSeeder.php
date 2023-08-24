<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            (object)['nom' => ('La Foi')],
            (object)['nom' => ("L'amour")],
            (object)['nom' => ("L'oeuvre du Saint-Esprit")],
            (object)['nom' => ("La Saine doctrine")],
            (object)['nom' => ("La Sanctification")],
            (object)['nom' => ("Le Mariage")],
            (object)['nom' => ("Le Péché")],
            (object)['nom' => ("Le Salut")],
            (object)['nom' => ("La Prière")],
            (object)['nom' => ("La Crainte de Dieu")],
        ];

        foreach ($categories as $categorie) {
            Categorie::create([
                'nom' => $categorie->nom,
                'seeder' => 'CategoriesTableSeeder',
            ]);
        }
    }
}
