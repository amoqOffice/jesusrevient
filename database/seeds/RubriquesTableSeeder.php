<?php

use App\Rubrique;
use Illuminate\Database\Seeder;

class RubriquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Parole de vie
        // Qu'en dit la saine doctrine
        // Comprendre les écritures
        // Alerte rouge
        // Au pied du souverain
        // Parole de sagesse
        // Devançons l'aurore
        // Priere agressive
        // Allons gagner des âmes
        // Du passé au présent

        $rubriques = [
            (object)[
                'nom' => 'Parole de vie',
                'icon' => 'fas fa-bible',
                'color' => 'primary',
                'short' => 'PDV',
                'description' => 'Bénéficiez des révélations profondes',
            ],
            (object)[
                'nom' => "Qu'en dit la saine doctrine",
                'icon' => 'fas fa-book',
                'color' => 'primary',
                'short' => 'QDLSD',
                'description' => 'Obtenez les détails de la Saine doctrine',
            ],
            (object)[
                'nom' => "Comprendre les écritures",
                'icon' => 'fab fa-readme',
                'color' => 'success',
                'short' => 'CLE',
                'description' => 'Profitez des Enseignements de base de la foi chrétienne',
            ],
            (object)[
                'nom' => "Alerte rouge",
                'icon' => 'bi bi-megaphone',
                'color' => 'danger',
                'short' => 'AR',
                'description' => 'Restez alerté des différents temps spirituels que nous traversons',
            ],
            (object)[
                'nom' => "Au pied du souverain",
                'icon' => 'bi bi-mic',
                'color' => 'warning',
                'short' => 'APDS',
                'description' => 'Ecoutez des cantiques profonds',
            ],
            (object)[
                'nom' => "Parole de sagesse",
                'icon' => 'fas fa-seedling',
                'color' => 'primary',
                'short' => 'PDS',
                'description' => 'Des Paroles de sagesse profonde pour mieux marcher dans la foi',
            ],
            (object)[
                'nom' => "Devançons l'aurore",
                'icon' => 'bi bi-cloud-sun-fill',
                'color' => 'warning',
                'short' => 'DA',
                'description' => "Devancez l'Aurore par des prières intenses",
            ],
            (object)[
                'nom' => "Priere agressive",
                'icon' => 'fas fa-fire',
                'color' => 'warning',
                'short' => 'PA',
                'description' => 'Vivez des combats spirituels intenses contre vos ennemis sprituels',
            ],
            (object)[
                'nom' => "Allons gagner des âmes",
                'icon' => 'bi bi-megaphone',
                'color' => 'danger',
                'short' => 'EVG',
                'description' => "Apprenez à prêcher et gagnez des âmes",
            ],
            (object)[
                'nom' => "Du passé au présent",
                'icon' => 'bi bi-clock-history',
                'color' => 'default',
                'short' => 'DPAP',
                'description' => 'Des Témoignages puissants, émouvants et très édifiants',
            ],
        ];

        foreach ($rubriques as $rubrique) {
            Rubrique::create([
                'nom' => $rubrique->nom,
                'icon' => $rubrique->icon,
                'color' => $rubrique->color,
                'short' => $rubrique->short,
                'description' => $rubrique->description,
            ]);
        }
    }
}
