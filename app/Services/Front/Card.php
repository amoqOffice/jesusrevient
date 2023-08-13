<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;


// img
// icon_type_bg
// icon_type_color
// icon_type
// tag_color
// tag_title
// link
// title
// description
// logo
// author_link
// author_name
// date

class Card {
    public static function frontRender($card) {

        // Retourne l'affichage du composant
        return View::make('front/partials/card', compact('card'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'img' => $data['img'],
            'icon_color' => $data['icon_color'],
            'icon' => $data['icon'],
            'tag_color' => $data['tag_color'],
            'tag_title' => $data['tag_title'],
            'link' => $data['link'],
            'title' => $data['title'],
            'description' => $data['description'],
            'logo' => $data['logo'],
            'author_link' => $data['author_link'],
            'author_name' => $data['author_name'],
            'date' => $data['date'],
        ];

        return (object)$dataFormat;
    }
}
