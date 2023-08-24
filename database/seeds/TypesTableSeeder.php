<?php

use App\Type;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $types = [
            'Bapteme',
            'Culte',
            'Delivrance',
            'Enseignement',
            'Evangelisation',
            'Predication',
            'Prophetie',
            'Priere',
            'Temoignage',
        ];

        foreach ($types as $type) {
            Type::firstOrCreate([
                'nom' => $type,
                'seeder' => 'TypesTableSeeder',
            ]);
        }
    }
}
