<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypesTableSeeder::class);
        $this->call(RubriquesTableSeeder::class);
        $this->call(ResponsablesTableSeeder::class);
        $this->call(EglisesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ActivitesTableSeeder::class);
        $this->call(ActivitesByPlaylistTableSeeder::class);
    }
}
