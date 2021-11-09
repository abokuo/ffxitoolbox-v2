<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\VanaTimeController;

class VanaClock extends Component
{
    public function render()
    {
        $vana = new VanaTimeController;
        $vanaTime = $vana->getVanaTime();
        return view('livewire.vana-clock', compact('vanaTime'));
    }
}
