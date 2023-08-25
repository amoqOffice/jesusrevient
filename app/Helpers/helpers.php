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
    return "https://www.youtube.com/embed/".getYoutubeVideoId($url);
}

function getYoutubeSuscribers($api_key = "AIzaSyAt7PLp7wU-50-FfsbRRIOqFO8nyzs2dmA", $chann_id = "UCm0h6l5ocScSzhvQkD5AIEg") {
    //reading the channel file containing required data in JSON format
    $subscribers = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$chann_id.'&key='.$api_key);
    $views = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$chann_id.'&key='.$api_key);

    // Decoding the JSON string and converting it into PHP variables.
    $response = json_decode($subscribers, true );
    $response2 = json_decode($views, true );

    // Getting the integer value from the variables of Subscribers and Lifetime views
    $subscribersCount = intval($response['items'][0]['statistics']['subscriberCount']);
    $viewsCount = intval($response2['items'][0]['statistics']['viewCount']);

    return $subscribersCount;
}

function str_limit($text, $maxLength, $suffix = "...")
{
    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength) . $suffix;
    } else {
        return $text;
    }
}

function str_normalise($inputString) {
    $search = explode(",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,ø,Ø,Å,Á,À,Â,Ä,È,É,Ê,Ë,Í,Î,Ï,Ì,Ò,Ó,Ô,Ö,Ú,Ù,Û,Ü,Ÿ,Ç,Æ,Œ");
    $replace = explode(",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,o,O,A,A,A,A,A,E,E,E,E,I,I,I,I,O,O,O,O,U,U,U,U,Y,C,AE,OE");

    $res = str_replace($search, $replace, $inputString);

    return strtolower($res);
}

function str_format($inputText) {
    // Suppression des émojis
    $cleanedText = remove_emoji($inputText);

    // Trouve la position de "GROUPE JESUS-REVIENT" et supprime le dernier caractère avant
    $position = strpos($inputText, "GROUPE JESUS-REVIENT");
    if ($position !== false && $position > 0) {
        $inputText = substr_replace($inputText, '', $position - 1, 1);
    }

    // Supprime "GROUPE JESUS-REVIENT" et convertit le reste du texte
    $cleanedText = str_replace("GROUPE JESUS-REVIENT", "", $inputText);
    $convertedText = mb_convert_case($cleanedText, MB_CASE_TITLE, "UTF-8");

    // Supprime le dernier caractere si il est un caractere spécial
    $lastChar = mb_substr($convertedText, -1); // Récupère le dernier caractère
    $specialChars = array('-', '/', '|', '*', '_'); // Caractères spéciaux à vérifier

    if (in_array($lastChar, $specialChars)) {
        $convertedText = mb_substr($convertedText, 0, -1); // Supprime le dernier caractère
    }

    return $convertedText;
}

function int_formatNumber($number) {
    if ($number >= 1000000) {
        return floor($number / 1000000) . 'M';
    } elseif ($number >= 1000) {
        return floor($number / 1000) . 'k';
    } else {
        return (string) $number;
    }
}

function remove_emoji($string)
{
    // Match Enclosed Alphanumeric Supplement
    $regex_alphanumeric = '/[\x{1F100}-\x{1F1FF}]/u';
    $clear_string = preg_replace($regex_alphanumeric, '', $string);

    // Match Miscellaneous Symbols and Pictographs
    $regex_symbols = '/[\x{1F300}-\x{1F5FF}]/u';
    $clear_string = preg_replace($regex_symbols, '', $clear_string);

    // Match Emoticons
    $regex_emoticons = '/[\x{1F600}-\x{1F64F}]/u';
    $clear_string = preg_replace($regex_emoticons, '', $clear_string);

    // Match Transport And Map Symbols
    $regex_transport = '/[\x{1F680}-\x{1F6FF}]/u';
    $clear_string = preg_replace($regex_transport, '', $clear_string);

    // Match Supplemental Symbols and Pictographs
    $regex_supplemental = '/[\x{1F900}-\x{1F9FF}]/u';
    $clear_string = preg_replace($regex_supplemental, '', $clear_string);

    // Match Miscellaneous Symbols
    $regex_misc = '/[\x{2600}-\x{26FF}]/u';
    $clear_string = preg_replace($regex_misc, '', $clear_string);

    // Match Dingbats
    $regex_dingbats = '/[\x{2700}-\x{27BF}]/u';
    $clear_string = preg_replace($regex_dingbats, '', $clear_string);

    return $clear_string;
}
