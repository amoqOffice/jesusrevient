<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class Topic {
    public static function frontRender($title) {

        // Retourne l'affichage du composant
        return View::make('front/partials/topic', compact('topic'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'color' => $data['color'],
            'link' => $data['link'],
            'title' => $data['title'],
        ];

        return (object)$dataFormat;
    }
}
