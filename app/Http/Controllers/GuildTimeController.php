<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\VanaTimeController;

class GuildTimeController extends Controller
{
    public function getGuildTime($vanaOpen, $vanaClose){
        $vana = new VanaTimeController;
        $vanaTime = $vana->getVanaTime();

        $nowInVanaSecs = $vanaTime['vanaHour'] * 3600 + $vanaTime['vanaMinute'] * 60 + $vanaTime['vanaSecond'];
        $vanaOpenTimeInSecs = $vanaOpen * 3600;
        $vanaCloseTimeInSecs = $vanaClose * 3600;

        switch ($nowInVanaSecs){
        //當前時間位於營業時間內的情況：營業剩餘時間 = (休息時間換算秒數 - 當前時間換算秒數) / 25
                case $nowInVanaSecs > $vanaOpenTimeInSecs && $nowInVanaSecs < $vanaCloseTimeInSecs:
                    $etaVanaInSeconds = $vanaCloseTimeInSecs - $nowInVanaSecs;
                    $etaEarthInSecs = $etaVanaInSeconds / 25;
        //特殊定義：當遊戲時間為 00:00 時的處理
                    if($etaVanaInSeconds == $vanaCloseTimeInSecs){
                        $etaVanaInSeconds = $vanaOpenTimeInSecs;
                        $etaEarthInSecs = $etaVanaInSeconds / 25;
                        $etaEarthMins = floor($etaEarthInSecs / 60);
                        $etaEarthSecs = $etaEarthInSecs % 60;
                        if ($etaEarthMins < 10){$etaEarthMins = "0".$etaEarthMins;}
                        if ($etaEarthSecs < 10){$etaEarthSecs = "0".$etaEarthSecs;}
                        $result = "&nbsp;<font color=\"red\">店休</font><br />距離開店：".$etaEarthMins.":".$etaEarthSecs;
                    }else{
        //營業時間內的剩餘時間顯示
                        $etaEarthMins = floor($etaEarthInSecs / 60);
                        $etaEarthSecs = $etaEarthInSecs % 60;
                        if ($etaEarthMins < 10){$etaEarthMins = "0".$etaEarthMins;}
                        if ($etaEarthSecs < 10){$etaEarthSecs = "0".$etaEarthSecs;}
                        $result = "&nbsp;<font color=\"green\">營業</font><br />距離休息：".$etaEarthMins.":".$etaEarthSecs;
                    }
                break;

        //當前時間位於打烊時間，但未跨日時的情況
                case $nowInVanaSecs > $vanaOpenTimeInSecs:
                    $etaVanaInSeconds = 86400 - $nowInVanaSecs + 28800;
                    $etaEarthInSecs = $etaVanaInSeconds / 25;
                    $etaEarthMins = floor($etaEarthInSecs / 60);
                    $etaEarthSecs = $etaEarthInSecs % 60;
                    if ($etaEarthMins < 10){$etaEarthMins = "0".$etaEarthMins;}
                    if ($etaEarthSecs < 10){$etaEarthSecs = "0".$etaEarthSecs;}
                    $result = "&nbsp;<font color=\"red\">店休</font><br />距離開店：".$etaEarthMins.":".$etaEarthSecs;
                break;

        //當前時間位於打烊時間，已跨日但未達開店時間的情況
                case $nowInVanaSecs < $vanaCloseTimeInSecs:
                    $etaVanaInSeconds = $vanaOpenTimeInSecs - $nowInVanaSecs;
                    $etaEarthInSecs = $etaVanaInSeconds / 25;
                    $etaEarthMins = floor($etaEarthInSecs / 60);
                    $etaEarthSecs = $etaEarthInSecs % 60;
                    if ($etaEarthMins < 10){$etaEarthMins = "0".$etaEarthMins;}
                    if ($etaEarthSecs < 10){$etaEarthSecs = "0".$etaEarthSecs;}
                    $result = "&nbsp;<font color=\"red\">店休</font><br />距離開店：".$etaEarthMins.":".$etaEarthSecs;
                break;
                default:
        }
        return $result;
    }
}
