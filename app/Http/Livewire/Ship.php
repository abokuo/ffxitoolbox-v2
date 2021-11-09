<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\ShipController;

class Ship extends Component
{
    public function render()
    {
        $ship = new ShipController;
        $shipTime = $ship->getShipTime();
        $silverShip = $ship->getSilverShip();
        //南桟橋	00:50	エメフィ支水路	中桟橋	04:42
        //中桟橋	05:10	井守ヶ淵	南桟橋	08:35
        //南桟橋	10:10	主水路	北桟橋	15:58
        //北桟橋	17:25	主水路	中桟橋	19:13
        //中桟橋	19:50	井守ヶ淵	南桟橋	23:33
        //南棧橋往中棧橋第一班停靠時間有跨日，獨立處理
        $bargeStoM = $ship->getBargeStoM();
        $bargeMtoS = $ship->getBargeTime(4, 42, 5, 10);
        $bargeStoN = $ship->getBargeTime(8, 35, 10, 10);
        $bargeNtoM = $ship->getBargeTime(15, 58, 17, 25);
        $bargeMtoS2 = $ship->getBargeTime(19, 13, 19, 50);

        //夕照桟橋	00:45	ダルメルロック遊覧	05:05	夕照桟橋
        //夕照桟橋	05:30	　	08:30	プルゴノルゴ島
        //プルゴノルゴ島	09:15	　	12:15	夕照桟橋
        //夕照桟橋	12:45	マリヤカレヤリーフ遊覧	16:55	夕照桟橋
        //夕照桟橋	17:30	　	20:40	プルゴノルゴ島
        //プルゴノルゴ島	21:15	　	00:20	夕照桟橋
        $travelDarumeru = $ship->getManaCliper(0, 20, 0, 45);
        $bibikiToIsland1 = $ship->getManaCliper(5, 5, 5, 30);
        $islandToBibiki1 = $ship->getManaCliper(8, 30, 9, 15);
        $travelMariyaka = $ship->getManaCliper(12, 15, 12, 45);
        $bibikiToIsland2 = $ship->getManaCliper(16, 55, 17, 30);
        $islandToBibiki2 = $ship->getManaCliper(20, 40, 21, 15);

        $binding = [
            'shipTime' => $shipTime,
            'silverShip' => $silverShip,
            'bargeStoM' => $bargeStoM,
            'bargeMtoS' => $bargeMtoS,
            'bargeStoN' => $bargeStoN,
            'bargeNtoM' => $bargeNtoM,
            'bargeMtoS2' => $bargeMtoS2,
            'travelDarumeru' => $travelDarumeru,
            'bibikiToIsland1' => $bibikiToIsland1,
            'islandToBibiki1' => $islandToBibiki1,
            'travelMariyaka' => $travelMariyaka,
            'bibikiToIsland2' => $bibikiToIsland2,
            'islandToBibiki2' => $islandToBibiki2,
    ];
        return view('livewire.ship', $binding);

    }
}
