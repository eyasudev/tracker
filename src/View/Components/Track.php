<?php

namespace Puppyter\Tracker\View\Components;

use Illuminate\View\Component;

class Track extends Component
{
    public $tops;
    public $topsIp;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tops, $topsIp)
    {
        $this->tops = $tops;
        $this->topsIp = $topsIp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('puppyter-components::track');
    }
}
