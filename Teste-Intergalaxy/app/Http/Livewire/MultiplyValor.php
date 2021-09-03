<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\HomeController;

class MultiplyValor extends Component
{
    public $qtd;
    public $value;
    public $total;

    public function mult(HomeController $valorDasCryptos)
    {
        $this->value = $valorDasCryptos->valor();
        $this->total = $this->qtd * $this->value;
    }
    public function render()
    {
        return view('livewire.multiply-valor');
    }
}
