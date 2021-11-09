<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\VanaTimeController;

class AirShipController extends Controller
{
    public function getAirShipTime($shipDepartHour1, $shipDepartMinute1){
        $vana = new VanaTimeController;
        $vanaTime = $vana->getVanaTime();

        $nowInVanaSecs = $vanaTime['vanaHour'] * 3600 + $vanaTime['vanaMinute'] * 60 + $vanaTime['vanaSecond'];
        $shipDepart1InSecs = $shipDepartHour1 * 3600 + $shipDepartMinute1 * 60;
        $shipArrive1InSecs = $shipDepart1InSecs - 3600;
        $shipDepart2InSecs = $shipDepart1InSecs + 21600;
        $shipArrive2InSecs = $shipDepart2InSecs - 3600;
        $shipDepart3InSecs = $shipDepart2InSecs + 21600;
        $shipArrive3InSecs = $shipDepart3InSecs - 3600;
        $shipDepart4InSecs = $shipDepart3InSecs + 21600;
        $shipArrive4InSecs = $shipDepart4InSecs - 3600;

        //0000時的情況
        if($nowInVanaSecs === 0){
            $arriveEarthInSecs = ($shipArrive1InSecs) / 25;
            $arriveEarthMins = floor($arriveEarthInSecs / 60);
            $arriveEarthSecs = $arriveEarthInSecs % 60;
            if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
            if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
            $result = "<font color='green'>航行</font>&nbsp;".$arriveEarthMins.":".$arriveEarthSecs;
            return $result;
        }

        switch ($nowInVanaSecs){
        //第一班到達前
            case $nowInVanaSecs < $shipArrive1InSecs:
                $arriveInSecs = ($shipArrive1InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>航行</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第一班到達
                case $nowInVanaSecs == $shipArrive1InSecs:
                    $result = "飛空艇到達";
                    return $result;
                break;
        //第一班抵達後至起飛前
            case $nowInVanaSecs > $shipArrive1InSecs && $nowInVanaSecs < $shipDepart1InSecs:
                $arriveInSecs = ($shipDepart1InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='red'>起飛1</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第一班起飛
            case $nowInVanaSecs == $shipDepart1InSecs:
                $result = "飛空艇起飛";
                return $result;
            break;
        //第一班起飛後至第二班抵達前
            case $nowInVanaSecs > $shipDepart1InSecs && $nowInVanaSecs < $shipArrive2InSecs:
                $departEarthInSecs = ($shipArrive2InSecs - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departEarthInSecs / 60);
                $departEarthSecs = $departEarthInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='green'>航行</font>&nbsp;".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //第二班到達
            case $nowInVanaSecs == $shipArrive2InSecs:
                $result = "飛空艇到達";
                return $result;
            break;
        //第二班抵達後至第二班起飛前
            case $nowInVanaSecs > $shipArrive2InSecs && $nowInVanaSecs < $shipDepart2InSecs:
                $arriveInSecs = ($shipDepart2InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='red'>起飛</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第二班起飛
            case $nowInVanaSecs == $shipDepart2InSecs:
                $result = "飛空艇起飛";
                return $result;
            break;
        //第二班起飛後至第三班抵達前
            case $nowInVanaSecs > $shipDepart2InSecs && $nowInVanaSecs < $shipArrive3InSecs:
                $departEarthInSecs = ($shipArrive3InSecs - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departEarthInSecs / 60);
                $departEarthSecs = $departEarthInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='green'>航行</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //第三班到達
            case $nowInVanaSecs == $shipArrive3InSecs:
                $result = "飛空艇到達";
                return $result;
            break;
        //第三班抵達後至第三班起飛前
            case $nowInVanaSecs > $shipArrive3InSecs && $nowInVanaSecs < $shipDepart3InSecs:
                $arriveInSecs = ($shipDepart3InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='red'>起飛</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第三班起飛
            case $nowInVanaSecs == $shipDepart3InSecs:
                $result = "飛空艇起飛";
                return $result;
            break;
        //第三班起飛後至第四班抵達前
            case $nowInVanaSecs > $shipDepart3InSecs && $nowInVanaSecs < $shipArrive4InSecs:
                $departEarthInSecs = ($shipArrive4InSecs - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departEarthInSecs / 60);
                $departEarthSecs = $departEarthInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='green'>航行</font>&nbsp;".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //第四班到達
            case $nowInVanaSecs == $shipArrive4InSecs:
                $result = "飛空艇到達";
                return $result;
            break;
        //第四班抵達後至第四班起飛前
            case $nowInVanaSecs > $shipArrive4InSecs && $nowInVanaSecs < $shipDepart4InSecs:
                $arriveInSecs = ($shipDepart4InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='red'>起飛</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第四班起飛
            case $nowInVanaSecs == $shipDepart4InSecs:
                $result = "飛空艇起飛";
                return $result;
            break;
        //第四班起飛後至隔日第一班抵達前，且尚未跨日
            case $nowInVanaSecs > $shipDepart4InSecs:
                $departEarthInSecs = (86400 - $nowInVanaSecs + $shipArrive1InSecs) / 25;
                $departEarthMins = floor($departEarthInSecs / 60);
                $departEarthSecs = $departEarthInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='green'>航行</font>&nbsp;".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;

            default:
        }
    }
}
