<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class videoCardFront extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        dd($config);

        return view('widgets.video_card_front', [
            'config' => $this->config,
        ]);
    }
}
