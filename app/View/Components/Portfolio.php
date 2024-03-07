<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Portfolio extends Component
{

    public $categories;
    public $first_category;
    
    public function __construct($categories, $first_category)
    {
        $this->categories = $categories;
        $this->first_category = $first_category;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfolio');
    }
}
