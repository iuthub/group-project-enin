<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Announcement extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $announcement;
    public $token;
    public function __construct($announcement ,$token)
    {
        $this->announcement = $announcement;
        $this->token = $token;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.announcement');
    }
}
