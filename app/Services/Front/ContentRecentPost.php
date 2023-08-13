<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class ContentRecentPost {
    public static function frontRender($contentRecentPost) {

        // Retourne l'affichage du composant
        return View::make('front/partials/contentRecentPost', compact('contentRecentPost'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'title' => $data['title'],
        ];

        return (object)$dataFormat;
    }
}
