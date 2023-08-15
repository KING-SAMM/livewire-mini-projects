<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public string|float $num1 = 0;
    public string|float $num2 = 0;
    public string $action = "";
    public string|float $result = 0;
    public bool $disabled = false;

    public function calculate()
    {
        return $this->result = match ($this->action) 
        {
             "+" => (float)$this->num1 + (float)$this->num2,
             "-" => (float)$this->num1 - (float)$this->num2,
             "x" => (float)$this->num1 * (float)$this->num2,
             "/" => (float)$this->num1 / (float)$this->num2,
             "%" => ((float)$this->num1 / 100) * (float)$this->num2,
             "" => "Choose an action",
             "action" => "Choose an action",
        };
    }

    public function updated($property)
    {
        $check = $this->num1 == "" || $this->num2 == "";

        return $this->disabled = match ($check) {
             true => true,
             false => false,
        };
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
