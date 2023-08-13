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

class ContentCard {
    public static function frontRender($cards) {

        // Retourne l'affichage du composant
        return View::make('front/partials/contentCard', compact('cards'))->render();
    }

    public static function dataFormat($data) {

    }
}
