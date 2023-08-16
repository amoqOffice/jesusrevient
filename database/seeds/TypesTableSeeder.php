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
            'Delivrance',
            'Bapteme',
            'Enseignement',
            'Predication',
            'Evangelisation',
            'Culte',
            'Prophetie',
            'Priere',
            'Temoignage',
        ];

        foreach ($types as $type) {
            Type::firstOrCreate([
                'nom' => $type,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
