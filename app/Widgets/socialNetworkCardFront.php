<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class socialNetworkCardFront extends AbstractWidget
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

        return view('widgets.social_network_card_front', [
            'config' => $this->config,
        ]);
    }
}
