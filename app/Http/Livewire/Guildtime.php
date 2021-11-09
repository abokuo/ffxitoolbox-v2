<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\GuildTimeController;

class Guildtime extends Component
{
    public function render()
    {
        $getGuildTime = new GuildTimeController;
        $timeWoodWorking = $getGuildTime->getGuildTime(6, 21);
        $timeCpntLanding = $getGuildTime->getGuildTime(5, 22);
        $timeSmithing = $getGuildTime->getGuildTime(8, 23);
        $timeGoldSmithing = $getGuildTime->getGuildTime(8, 23);
        $timeClothCraft = $getGuildTime->getGuildTime(6, 21);
        $timeLeatherCraft = $getGuildTime->getGuildTime(3, 18);
        $timeBoneCraft = $getGuildTime->getGuildTime(8, 23);
        $timeAlchemy = $getGuildTime->getGuildTime(8, 23);
        $timeCooking = $getGuildTime->getGuildTime(5, 20);
        $timeFishing = $getGuildTime->getGuildTime(3, 18);
        $timeBibikiWhiteGate = $getGuildTime->getGuildTime(1, 18);
        $timeFishingShip = $getGuildTime->getGuildTime(1, 23);
        $timeTenseido = $getGuildTime->getGuildTime(1, 23);
        $timeTenseidoNorg = $getGuildTime->getGuildTime(9, 23);

        $binding = [
                    'timeWoodWorking' => $timeWoodWorking,
                    'timeCpntLanding' => $timeCpntLanding,
                    'timeSmithing' => $timeSmithing,
                    'timeGoldSmithing' => $timeGoldSmithing,
                    'timeClothCraft' => $timeClothCraft,
                    'timeLeatherCraft' => $timeLeatherCraft,
                    'timeBoneCraft' => $timeBoneCraft,
                    'timeAlchemy' => $timeAlchemy,
                    'timeCooking' => $timeCooking,
                    'timeFishing' => $timeFishing,
                    'timeBibikiWhiteGate' => $timeBibikiWhiteGate,
                    'timeFishingShip' => $timeFishingShip,
                    'timeTenseido' => $timeTenseido,
                    'timeTenseidoNorg' => $timeTenseidoNorg,

            ];
            return view('livewire.guildtime', $binding);
    }
}
