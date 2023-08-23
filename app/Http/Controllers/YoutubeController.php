<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    // Youtube api key
    public function getInformationFromLink(Request $request) {
        $videoUrl = $request->url;

        // $thumbnail = getBestYouTubeThumbnail('https://www.youtube.com/watch?v=SElhkuDVmVE');

        Youtube::setApiKey('AIzaSyAt7PLp7wU-50-FfsbRRIOqFO8nyzs2dmA');

        $video = Youtube::getVideoInfo(getYoutubeVideoId($videoUrl));

        $date = date('Y-m-d', strtotime($video->snippet->publishedAt));

        return ([
            'titre' => $video->snippet->title,
            'description' => $video->snippet->description,
            'image' => "https://i.ytimg.com/vi/$video->id/default.jpg",
            'date' => $date,
        ]);
    }
}
