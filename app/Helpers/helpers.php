<?php
use App\Helpers\ImageHelper;
use App\Helpers\StringHelper;

function truncate_string($string, $length)
{
    return StringHelper::truncate($string, $length);
}

function generateImage($width, $height) {
    return ImageHelper::generate($width, $height);
}
