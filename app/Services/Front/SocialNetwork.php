<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class SocialNetwork {
    public static function frontRender($socialNetwork) {

        // Retourne l'affichage du composant
        return View::make('front/partials/socialNetworkCard', compact('socialNetwork'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'bg_color' => $data['bg_color'],
            'text_color' => $data['text_color'],
            'icon' => $data['icon'],
            'followers' => $data['followers']
        ];

        return (object)$dataFormat;
    }
}
