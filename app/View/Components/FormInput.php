<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    public $type;
    public $name;
    public $label;
    public $min;
    public $max;

    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($label,$name,$type, $min=5, $max = 32,$value=" ")
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->min = $min;
        $this->max = $max;
       $this->value = $value;
        
 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-input');
    }
}
