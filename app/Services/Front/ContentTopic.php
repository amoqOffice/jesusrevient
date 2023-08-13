<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class ContentTopic {
    public static function frontRender($contentTopic) {

        // Retourne l'affichage du composant
        return View::make('front/partials/contentTopic', compact('contentTopic'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'title' => $data['title'],
        ];

        return (object)$dataFormat;
    }
}
