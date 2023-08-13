<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class SimpleBreadcrumb {
    public static function frontRender($breadcrumb) {
        
        // Retourne l'affichage du composant
        return View::make('front/partials/simpleBreadcrumb', compact('breadcrumb'))->render();
    }

    public static function dataFormat($data) {
        $dataFormat = [
            'color' => $data['color'],
            'title' => $data['title'],
            'seperator' => $data['seperator'],
            'elements' => $data['elements'],
            'active_text' => $data['active_text'],
        ];

        return (object)$dataFormat;
    }
}
