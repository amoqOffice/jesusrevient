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

class ContentCategorie {
    public static function frontRender($contentCategorie) {

        // Retourne l'affichage du composant
        return View::make('front/partials/contentCategorie', compact('contentCategorie'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'title' => $data['title'],
        ];

        return (object)$dataFormat;
    }
}
