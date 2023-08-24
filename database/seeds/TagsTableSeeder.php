<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            (object)['nom' => 'Foi'],
            (object)['nom' => "Amour"],
            (object)['nom' => "Oeuvre du Saint-Esprit"],
            (object)['nom' => "Saine doctrine"],
            (object)['nom' => "Sanctification"],
            (object)['nom' => "Mariage"],
            (object)['nom' => "Péché"],
            (object)['nom' => "Salut"],
            (object)['nom' => "Prière"],
            (object)['nom' => "Crainte de Dieu"],
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'nom' => $tag->nom
            ]);
        }
    }
}
