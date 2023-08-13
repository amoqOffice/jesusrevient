<?php

namespace App\Helpers;

class StringHelper
{
    public static function truncate($string, $length)
    {
        return strlen($string) > $length ? substr($string, 0, $length) . '...' : $string;
    }
}
