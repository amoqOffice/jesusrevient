<?php
use App\Helpers\ImageHelper;
use App\Helpers\StringHelper;

function truncate_string($string, $length)
{
    return preg_replace('/\s*\S{1,}(\s*)$/u', ' ...', substr($string, 0, $length));
    // return StringHelper::truncate($string, $length);
}

function generateImage($width, $height) {
    // <img src="data:image/png;base64, {{ generateImage(100, 70) }}" alt="">
    return ImageHelper::generate($width, $height);
}
