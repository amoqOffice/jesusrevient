<?php

namespace App\Services\Front;
use Illuminate\Support\Facades\View;

class Button {
    public static function frontRender($color) {
        $content = View::make('front/partials/button', compact('color'))->render();

        return $content;
    }
}
