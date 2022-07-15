<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class Input extends Component
{

    public $label;
    public $placeholder;

    public function __construct($label, $placeholder,)
    {
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
