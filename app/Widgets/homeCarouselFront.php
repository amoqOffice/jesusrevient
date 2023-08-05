<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class homeCarouselFront extends AbstractWidget
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
        //

        return view('widgets.home_carousel_front', [
            'config' => $this->config,
        ]);
    }
}
