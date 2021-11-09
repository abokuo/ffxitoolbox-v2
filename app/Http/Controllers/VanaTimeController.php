<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VanaTimeController extends Controller
{
    private $vanaOriginalTimeInSecs, //Vana'diel 起始時間換算成秒
        $earthOriginalTime, //Vana'diel 起始時間對應的地球時間
        $earthOriginalTimeInSecs, //Vana'diel 起始時間對應的地球時間換算成 UNIX 時間戳記後的經過秒數
        $earthNowInSecs, //當前地球時間換算成 UNIX 時間戳記後的經過秒數
        //定義 $vanaPeriodInSecs 為 $earthNowInSecs 減 $earthOriginalTimeInSecs 後的差，
        //補上一小時時差後再乘以 25，作為 Vana'diel 起始時間後的增加秒：Vana'diel 的時間經過速度是地球時間的 25 倍。
        //備考：補上時差後可能需要斟酌加上 1-2 秒與遊戲中顯示的時間批配
        $vanaPeriodInSecs,
        $vanaNow, //Vana'diel 當前時間：Vana'diel 起始時間 + $vanaPeriodInSecs，單位為秒
        $vanaYear, //當前 Vana'diel 年份，依據為 $vanaNow 除以每年秒數後無條件捨去小數位後的數字
        //定義 $vanaMonth 為當前 Vana'diel 月份，依據為 $vanaNow 除以每月秒數後無條件捨去小數位後的數字，
        //因起始月為「一」月不是「零」月，所以後面要補一。
        //如果月份數小於十則前面補「0」，讓排列統一為二位數。
        $vanaMonth,
        //定義 $vanaDay 為當前 Vana'diel 日，依據為 $vanaNow 除以每日秒數後無條件捨去小數位後的數字，
        //因起始日為「一」日不是「零」日，所以後面要補一。
        //如果日小於十則前面補「0」，讓排列統一為二位數。
        $vanaDay,
        //定義 $vanaHour 為當前 Vana'diel 時，依據為 $vanaNow 除以小時秒數後無條件捨去小數位後的數字，
        //如果時小於十則前面補「0」，讓排列統一為二位數。
        $vanaHour,
        //定義 $vanamMinute 為當前 Vana'diel 分，依據為 $vanaNow 除以分秒數後無條件捨去小數位後的數字，
        //如果分小於十則前面補「0」，讓排列統一為二位數。
        $vanamMinute,
        //定義 $vanamSecond 為當前 Vana'diel 秒，依據為 $vanaNow 經過前面計算後的剩餘值。
        //如果秒小於十則前面補「0」，讓排列統一為二位數。
        $vanaSecond,
        $vanaWeekdays, //Vana'Diel 曜日陣列
        $vanaWeekday, //Vana'Diel 當日曜日
        $vanaMoonPhases, //Vana'Diel 月齡陣列
        $vanaMoonPhase; //Vana'Diel 當日月齡
        //定義陣列變數：$vanaTime，存放計算完後的 Vana'diel 時間資訊：
        //年、月、日、時、分、秒、曜日、月齡
    public $vanaTime;

    public function getVanaTime(){
        $this->vanaOriginalTimeInSecs = 934 * (360 * 86400) + (8 - 1) * (30 * 86400) + (4 - 1) * 86400 + 18 * 3600;
        $this->earthOriginalTime="2003-12-01 18:00:01";
        $this->earthOriginalTimeInSecs = strtotime($this->earthOriginalTime);
        $this->earthNowInSecs = strtotime("now");
        $this->vanaPeriodInSecs =  ($this->earthNowInSecs - $this->earthOriginalTimeInSecs + 3600 ) * 25;
        $this->vanaNow = $this->vanaOriginalTimeInSecs + $this->vanaPeriodInSecs;
        $this->varaWeekdays = ['火','土','水','風','氷','雷','光','闇',];
        $this->vanaMoonPhases = ['二十日月','二十六夜','新月','三日月','七日月','上弦の月','十日月','十三夜','満月','十六夜','居待月','下弦の月',];
        //定義 $vanaWeekday 為 Vana'diel 曜日，為當前 Vana 時間除以 8（一週為八個曜日）後的餘數為當前曜日
        $this->vanaWeekday = $this->varaWeekdays[(floor($this->vanaNow / 86400) % 8)];
        //定義 $vanaMoonPhase 為 Vana'diel 當前時間的月齡，計算方式按照原作者資料為當前 Vana'diel 時間
        //加二日後除以一週秒數，之後的結果除以 12 後取餘數（計算依據待査）。
        $this->vanaMoonPhase = $this->vanaMoonPhases[floor(($this->vanaNow + 86400 * 2) / (86400 * 7)) % 12];

        $this->vanaYear = floor($this->vanaNow / (360 * 86400));
        //將 $vanaNow 除以每年秒數後的餘數指定回 $vanaNow，繼續後面的月計算
        $this->vanaNow = $this->vanaNow % (360 * 86400);
        $this->vanaMonth = floor($this->vanaNow / (30 * 86400)) + 1;
        if ($this->vanaMonth < 10){$this->vanaMonth = "0".$this->vanaMonth;}else{$this->vanaMonth = $this->vanaMonth;}
        //將 $vanaNow 除以每月秒數後的餘數指定回 $vanaNow，繼續後面的日計算
        $this->vanaNow = $this->vanaNow % (30 * 86400);
        $this->vanaDay = floor(($this->vanaNow / 86400)) + 1;
        if ($this->vanaDay < 10){$this->vanaDay = "0".$this->vanaDay;}else{$this->vanaDay = $this->vanaDay;}
        //將 $vanaNow 除以每日換算秒數後的餘數指定回 $vanaNow，繼續後面的時計算
        $this->vanaNow = $this->vanaNow % 86400;
        $this->vanaHour = floor(($this->vanaNow / 3600));
        if ($this->vanaHour < 10){$this->vanaHour = "0".$this->vanaHour;}else{$this->vanaHour = $this->vanaHour;}
        //將 $vanaNow 除以小時換算秒數後的餘數指定回 $vanaNow，繼續後面的分計算
        $this->vanaNow = $this->vanaNow % 3600;
        $this->vanaMinute = floor(($this->vanaNow / 60));
        if ($this->vanaMinute < 10){$this->vanaMinute = "0".$this->vanaMinute;}else{$this->vanaMinute = $this->vanaMinute;}
        //將 $vanaNow 除以分換算秒數後的餘數指定回 $vanaNow，繼續後面的秒計算
        $this->vanaNow = $this->vanaNow % 60;
        $this->vanaSecond = $this->vanaNow;
        if ($this->vanaSecond < 10){$this->vanaSecond = "0".$this->vanaSecond;}else{$this->vanaSecond = $this->vanaSecond;}

        $this->vanaTime = [
                    'vanaYear' => $this->vanaYear,
                    'vanaMonth' => $this->vanaMonth,
                    'vanaDay' => $this->vanaDay,
                    'vanaHour' => $this->vanaHour,
                    'vanaMinute' => $this->vanaMinute,
                    'vanaSecond'=> $this->vanaSecond,
                    'vanaWeekday' => $this->vanaWeekday,
                    'vanaMoonPhase'=>$this->vanaMoonPhase,
        ];
        return $this->vanaTime;
    }

}
