<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        // Komponen ini akan merender blade view yang terletak di 'layouts.app'
        return view('layouts.app');
    }
}