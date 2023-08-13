<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class InformationBanner {
    public static function frontRender($banner) {
        // Conversion de banner array en banner objet
        $banner = (object)$banner;

        // Retourne l'affichage du composant
        return View::make('front/partials/informationBanner', compact('banner'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'link' => $data['link'],
            'img' => $data['img'],
        ];

        return (object)$dataFormat;
    }
}
