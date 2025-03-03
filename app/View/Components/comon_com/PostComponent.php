<?php

namespace App\View\Components\comon_com;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $type ;
    public $messages ;



    public function __construct(string $type , string $messages )
    {
        $this->type = $type ;
        $this->messages = $messages ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comon_com.post-component');
    }
}
