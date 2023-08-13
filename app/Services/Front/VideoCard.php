<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class VideoCard {
    public static function frontRender($videoCard) {

        // Retourne l'affichage du composant
        return View::make('front/partials/videoCard', compact('videoCard'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'img' => $data['img'],
            'icon_color' => $data['icon_color'],
            'icon' => $data['icon'],
            'title_link' => $data['title_link'],
            'title' => $data['title'],
            'tag_color' => $data['tag_color'],
            'tag_title' => $data['tag_title'],
            'date' => $data['date'],
        ];

        return (object)$dataFormat;
    }
}
