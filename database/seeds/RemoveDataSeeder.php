<?php

use Illuminate\Database\Seeder;

class RemoveDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seederFileName = "WebsiteSeeder";
        $tables = [
            'activites',
            'categories',
            'codes',
            'eglises',
            'responsables',
            'rubriques',
            'tags',
            'types',
        ];

        foreach ($tables as $table) {
            DB::table($table)->where('seeder', 'LIKE', "%$seederFileName%")->delete();
        }
    }
}
