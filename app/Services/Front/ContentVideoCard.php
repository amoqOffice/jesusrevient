<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class ContentVideoCard {
    public static function frontRender($contentVideoCard) {

        // Retourne l'affichage du composant
        return View::make('front/partials/contentVideoCard', compact('contentVideoCard'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'title' => $data['title'],
        ];

        return (object)$dataFormat;
    }
}
