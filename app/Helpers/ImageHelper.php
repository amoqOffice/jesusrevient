<?php

namespace App\Helpers;

class ImageHelper
{
    public static function generate($width, $height)
    {
        $image = imagecreatetruecolor($width, $height);
        $backgroundColor = imagecolorallocate($image, 170, 170, 170);
        $textColor = imagecolorallocate($image, 0, 0, 0);

        imagefill($image, 0, 0, $backgroundColor);

        // $font = 'C:\Windows\Fonts\arial.ttf';
        $font = __DIR__.'/../../public/assets/front/font/arial.ttf';
        $text = "$width X $height";

        $fontSize = min($width, $height) * 0.2;

        $textSize = imagettfbbox($fontSize, 0, $font, $text);
        $textWidth = $textSize[4] - $textSize[6];
        $textHeight = $textSize[1] - $textSize[7];

        $positionX = ($width - $textWidth) / 2;
        $positionY = ($height - $textHeight) / 2 + $textHeight;

        imagettftext($image, $fontSize, 0, $positionX, $positionY, $textColor, $font, $text);

        ob_start();
        imagepng($image);
        $image_data = ob_get_clean();

        imagedestroy($image);

        return base64_encode($image_data);

        // <img src="data:image/png;base64, {{ generateImage(100, 70) }}" alt="">
    }
}
