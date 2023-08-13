<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class Categorie {
    public static function frontRender($categorie) {

        // Retourne l'affichage du composant
        return View::make('front/partials/categorie', compact('categorie'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'color' => $data['color'],
            'title' => $data['title'],
            'counter' => $data['counter'],
        ];

        return (object)$dataFormat;
    }
}
