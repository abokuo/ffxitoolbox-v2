<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\AirShipController;

class Airship extends Component
{
    public function render()
    {
        $airShip = new AirShipController;
        $sanJeuno = $airShip->getAirShipTime(4, 15);
        $basJeuno = $airShip->getAirShipTime(1, 15);
        $winJeuno = $airShip->getAirShipTime(5, 15);
        $kazhamJeuno = $airShip->getAirShipTime(2, 15);
        $jeunoSan = $airShip->getAirShipTime(1, 15);
        $jeunoBas = $airShip->getAirShipTime(4, 15);
        $jeunoWin = $airShip->getAirShipTime(2, 15);
        $jeunoKazham = $airShip->getAirShipTime(5, 15);

        $binding = [
            'sanJeuno' => $sanJeuno,
            'basJeuno' => $basJeuno,
            'winJeuno' => $winJeuno,
            'kazhamJeuno' => $kazhamJeuno,
            'jeunoSan' => $jeunoSan,
            'jeunoBas' => $jeunoBas,
            'jeunoWin' => $jeunoWin,
            'jeunoKazham' => $jeunoKazham,

    ];
        return view('livewire.airship', $binding);
    }
}
