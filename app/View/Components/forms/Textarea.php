<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class Textarea extends Component
{

    public $label;
    public $row;

    public function __construct($label, $row)
    {
        $this->label = $label;
        $this->row = $row;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.textarea');
    }
}
