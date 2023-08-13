<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class Title {
    public static function frontRender($title) {

        // Retourne l'affichage du composant
        return View::make('front/partials/title', compact('title'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'icon' => $data['icon'],
            'content' => $data['content'],
        ];

        return (object)$dataFormat;
    }
}
