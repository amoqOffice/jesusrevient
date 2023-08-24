<?php
function truncate_string($string, $length) {
    return preg_replace('/\s*\S{1,}(\s*)$/u', ' ...', substr($string, 0, $length));
}

function generateImage($width, $height) {
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

    return 'data:image/png;base64, '.base64_encode($image_data);
}

function getYoutubeVideoId($url) {
    $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/|youtube\.com\/live\/)([^"&?\/ ]{11})/';
    preg_match($pattern, $url, $matches);

    return isset($matches[1]) ? $matches[1] : null;
}

function getBestYouTubeThumbnail($url) {
    $qualities = ['maxresdefault', 'sddefault', 'hqdefault', 'mqdefault', 'default'];

    foreach ($qualities as $quality) {
        $external_link = 'https://img.youtube.com/vi/'.getYoutubeVideoId($url).'/'.$quality.'.jpg';

        if (@getimagesize($external_link)) {
            return $external_link;
        }
    }
}

function getYoutubeEmbedLink($url) {
    return isset($matches[1]) ? "https://www.youtube.com/embed/".getYoutubeVideoId($url) : null;
}

function str_limit($text, $maxLength, $suffix = "...")
{
    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength) . $suffix;
    } else {
        return $text;
    }
}

