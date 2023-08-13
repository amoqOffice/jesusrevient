<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class RecentPostCard {
    public static function frontRender($post = []) {
        
        // Retourne l'affichage du composant
        return View::make('front/partials/recentPostCard', compact('post'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'img' => $data['img'],
            'title' => $data['title'],
            'date' => $data['date'],
        ];

        return (object)$dataFormat;
    }
}
