<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\VanaTimeController;

class ShipController extends Controller
{
    public function getShipTime()
    {
        $vana = new VanaTimeController;
        $vanaTime = $vana->getVanaTime();
        $nowInVanaSecs = $vanaTime['vanaHour'] * 3600 + $vanaTime['vanaMinute'] * 60 + $vanaTime['vanaSecond'];

        $arrive1InSecs = 7 * 3600;
        $depart1InSecs = $arrive1InSecs + 3600;
        $arrive2InSecs = 15 * 3600;
        $depart2InSecs = $arrive2InSecs + 3600;
        $arrive3InSecs = 23 * 3600;
        $depart3InSecs = $arrive3InSecs + 3600;

        //第一班到達:0700
        if($nowInVanaSecs == $arrive1InSecs){
            $result = "第一班到港";
            return $result;
        }
        //第一班出航:0800
        if($nowInVanaSecs == $depart1InSecs){
            $result = "第一班啟航";
            return $result;
        }
        //第二班到達:1500
        if($nowInVanaSecs == $arrive2InSecs){
            $result = "第二班到港";
            return $result;
        }
        //第二班出航:1600
        if($nowInVanaSecs == $depart2InSecs){
            $result = "第二班啟航";
            return $result;
        }
        //第三班到達:2300
        if($nowInVanaSecs == $arrive3InSecs){
            $result = "第三班到港";
            return $result;
        }
        //第三班出航:2400
        if($nowInVanaSecs == 0){
            $result = "第三班啟航";
            return $result;
        }

        switch ($nowInVanaSecs){
        //第一班到達前:0001-0659
            case $nowInVanaSecs < $arrive1InSecs:
                $arriveInSecs = ($arrive1InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>離第一班到港</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第一班抵達後至出航前:0701-0759
            case $nowInVanaSecs > $arrive1InSecs && $nowInVanaSecs < $depart1InSecs:
                $departInSecs = ($depart1InSecs - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$arriveEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='red'>第一班啟航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //第一班啟航後至第二班抵達前:0801-1459
            case $nowInVanaSecs > $depart1InSecs && $nowInVanaSecs < $arrive2InSecs:
                $arriveEarthInSecs = ($arrive2InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveEarthInSecs / 60);
                $arriveEarthSecs = $arriveEarthInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>離第二班到港</font>&nbsp;".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第二班抵達後至第二班起飛前:1501-1559
            case $nowInVanaSecs > $arrive2InSecs && $nowInVanaSecs < $depart2InSecs:
                $departInSecs = ($depart2InSecs - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>離第二班啟航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //第二班啟航後至第三班抵達前:1601-2259
            case $nowInVanaSecs > $depart2InSecs && $nowInVanaSecs < $arrive3InSecs:
                $arriveEarthInSecs = ($arrive3InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveEarthInSecs / 60);
                $arriveEarthSecs = $arriveEarthInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>離第三班到港</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第三班抵達後至第三班啟航前:2301-2359
            case $nowInVanaSecs > $arrive3InSecs && $nowInVanaSecs < $depart3InSecs:
                $departInSecs = ($depart3InSecs - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>第三班啟航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;

            default:
        }
    }

    public function getSilverShip()
    {
        $vana = new VanaTimeController;
        $vanaTime = $vana->getVanaTime();
        $nowInVanaSecs = $vanaTime['vanaHour'] * 3600 + $vanaTime['vanaMinute'] * 60 + $vanaTime['vanaSecond'];

        $arrive1InSecs = 3 * 3600;
        $depart1InSecs = $arrive1InSecs + 3600;
        $arrive2InSecs = 11 * 3600;
        $depart2InSecs = $arrive2InSecs + 3600;
        $arrive3InSecs = 19 * 3600;
        $depart3InSecs = $arrive3InSecs + 3600;

        //第一班到達:0300
        if($nowInVanaSecs == $arrive1InSecs){
            $result = "第一班到港";
            return $result;
        }
        //第一班出航:0400
        if($nowInVanaSecs == $depart1InSecs){
            $result = "第一班啟航";
            return $result;
        }
        //第二班到達:1100
        if($nowInVanaSecs == $arrive2InSecs){
            $result = "第二班到港";
            return $result;
        }
        //第二班出航:1200
        if($nowInVanaSecs == $depart2InSecs){
            $result = "第二班啟航";
            return $result;
        }
        //第三班到達:1900
        if($nowInVanaSecs == $arrive3InSecs){
            $result = "第三班到港";
            return $result;
        }
        //第三班出航:2000
        if($nowInVanaSecs == $depart3InSecs){
            $result = "第三班啟航";
            return $result;
        }

        //第三班出航:2400
        if($nowInVanaSecs === 0){
            $arriveInSecs = ($arrive1InSecs) / 25;
            $arriveEarthMins = floor($arriveInSecs / 60);
            $arriveEarthSecs = $arriveInSecs % 60;
            if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
            if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
            $result = "<font color='green'>離第一班到港</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
            return $result;
        }

        switch ($nowInVanaSecs){
        //第一班到達前:2001-2359
            case $nowInVanaSecs > $depart3InSecs:
                $arriveInSecs = (86400 - $nowInVanaSecs + $arrive1InSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>離第一班到港</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第一班到達前:0001-0259
            case $nowInVanaSecs < $arrive1InSecs:
                $arriveInSecs = ($arrive1InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>離第一班到港</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第一班抵達後至出航前:0301-0359
            case $nowInVanaSecs > $arrive1InSecs && $nowInVanaSecs < $depart1InSecs:
                $departInSecs = ($depart1InSecs - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>第一班啟航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //第一班啟航後至第二班抵達前:0401-1059
            case $nowInVanaSecs > $depart1InSecs && $nowInVanaSecs < $arrive2InSecs:
                $arriveEarthInSecs = ($arrive2InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveEarthInSecs / 60);
                $arriveEarthSecs = $arriveEarthInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>離第二班到港</font>&nbsp;".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第二班抵達後至第二班起飛前:1101-1159
            case $nowInVanaSecs > $arrive2InSecs && $nowInVanaSecs < $depart2InSecs:
                $departInSecs = ($depart2InSecs - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>第二班啟航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //第二班啟航後至第三班抵達前:1201-1859
            case $nowInVanaSecs > $depart2InSecs && $nowInVanaSecs < $arrive3InSecs:
                $arriveEarthInSecs = ($arrive3InSecs - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveEarthInSecs / 60);
                $arriveEarthSecs = $arriveEarthInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>離第三班到港</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;
        //第三班抵達後至第三班啟航前:1901-1959
            case $nowInVanaSecs > $arrive3InSecs && $nowInVanaSecs < $depart3InSecs:
                $departInSecs = ($depart3InSecs - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>第三班啟航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;

            default:
        }
    }

    public function getBargeStoM()
    {
        //此船期停靠時間有跨日因此獨立處理，其他船期使用共通方法帶入參數解決
        $vana = new VanaTimeController;
        $vanaTime = $vana->getVanaTime();
        $nowInVanaSecs = $vanaTime['vanaHour'] * 3600 + $vanaTime['vanaMinute'] * 60 + $vanaTime['vanaSecond'];
        //南桟橋 23:33 抵達 00:50 開船
        $arriveMtoS = 23 * 3600 + 33 * 60;
        $departStoM = 50 * 60;

        if($nowInVanaSecs == $arriveMtoS){
            $result = "<font color='green'>駁船到達</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
            return $result;
        }
        if($nowInVanaSecs == $departStoM){
            $result = "<font color='green'>駁船離開</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
            return $result;
        }

        switch ($nowInVanaSecs){
        //船未到南棧橋
            case $nowInVanaSecs < $arriveMtoS:
                $arriveInSecs = ($arriveMtoS - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>駁船到達</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;

        //船抵達南棧橋，尚未跨日
            case $nowInVanaSecs > $arriveMtoS:
                $departInSecs = (86400 - $nowInVanaSecs + $departStoM) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>駁船出航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //0000時的處理
            case $nowInVanaSecs === 0:
                $departInSecs = $departStoM / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>駁船出航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //跨日後到開船前
            case $nowInVanaSecs < $departStoM:
                $departInSecs = ($departStoM - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>駁船出航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;

            default:
        }
    }

    public function getBargeTime($arriveH, $arriveM, $departH, $departM)
    {
        $vana = new VanaTimeController;
        $vanaTime = $vana->getVanaTime();
        $nowInVanaSecs = $vanaTime['vanaHour'] * 3600 + $vanaTime['vanaMinute'] * 60 + $vanaTime['vanaSecond'];
        $arriveTime = $arriveH * 3600 + $arriveM * 60;
        $departTime = $departH * 3600 + $departM * 60;

        if($nowInVanaSecs === $arriveTime){
            $result = "<font color='green'>駁船停靠</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
            return $result;
        }
        if($nowInVanaSecs === $departTime){
            $result = "<font color='green'>駁船離開</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
            return $result;
        }

        switch ($nowInVanaSecs){
        //船未抵達:0001-$arriveTime
            case $nowInVanaSecs < $arriveTime:
                $arriveInSecs = ($arriveTime - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>駁船到達</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;

        //船抵達棧橋，計算開船時間 $arriveTime - $departTime
            case $nowInVanaSecs > $arriveTime && $nowInVanaSecs < $departTime:
                $departInSecs = ($departTime - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>駁船出航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //開船後計算到跨日後駁船到達的剩餘時間:
            case $nowInVanaSecs > $departTime:
                $arriveInSecs = (86400 - $nowInVanaSecs + $arriveTime) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>駁船到達</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;

        //0000時的處理
            case $nowInVanaSecs === 0:
                $arriveInSecs = $arriveTime / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>駁船到達</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;

            default:
        }
    }

    public function getManaCliper($arriveH, $arriveM, $departH, $departM)
    {
        $vana = new VanaTimeController;
        $vanaTime = $vana->getVanaTime();
        $nowInVanaSecs = $vanaTime['vanaHour'] * 3600 + $vanaTime['vanaMinute'] * 60 + $vanaTime['vanaSecond'];
        $arriveTime = $arriveH * 3600 + $arriveM * 60;
        $departTime = $departH * 3600 + $departM * 60;

        if($nowInVanaSecs === $arriveTime){
            $result = "<font color='green'>駁船到達</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
            return $result;
        }
        if($nowInVanaSecs === $departTime){
            $result = "<font color='green'>駁船離開</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
            return $result;
        }

        switch ($nowInVanaSecs){
        //船未抵達:0001-$arriveTime
            case $nowInVanaSecs < $arriveTime:
                $arriveInSecs = ($arriveTime - $nowInVanaSecs) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>駁船到達</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;

        //船抵達棧橋，計算開船時間 $arriveTime - $departTime
            case $nowInVanaSecs > $arriveTime && $nowInVanaSecs < $departTime:
                $departInSecs = ($departTime - $nowInVanaSecs) / 25;
                $departEarthMins = floor($departInSecs / 60);
                $departEarthSecs = $departInSecs % 60;
                if ($departEarthMins < 10){$departEarthMins = "0".$departEarthMins;}
                if ($departEarthSecs < 10){$departEarthSecs = "0".$departEarthSecs;}
                $result = "<font color='red'>駁船出航</font>&nbsp".$departEarthMins.":".$departEarthSecs;
                return $result;
            break;
        //開船後計算到跨日後駁船到達的剩餘時間:
            case $nowInVanaSecs > $departTime:
                $arriveInSecs = (86400 - $nowInVanaSecs + $arriveTime) / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>駁船到達</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;

        //0000時的處理
            case $nowInVanaSecs === 0:
                $arriveInSecs = $arriveTime / 25;
                $arriveEarthMins = floor($arriveInSecs / 60);
                $arriveEarthSecs = $arriveInSecs % 60;
                if ($arriveEarthMins < 10){$arriveEarthMins = "0".$arriveEarthMins;}
                if ($arriveEarthSecs < 10){$arriveEarthSecs = "0".$arriveEarthSecs;}
                $result = "<font color='green'>駁船到達</font>&nbsp".$arriveEarthMins.":".$arriveEarthSecs;
                return $result;
            break;

            default:
        }
    }

}
