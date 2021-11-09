<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discompose;

class DiscomposeController extends Controller
{
    public function addDiscompose(){
        $binding = [
            'title' => '增加分解資料',
        ];
        return view('auth.adddiscompose', $binding);
    }

    public function addDiscomposeProcess(){
        $inputs = request()->all();
        $inputs['skill'] = nl2br($inputs['skill']);
        $inputs['item1'] = nl2br($inputs['item1']);
        $inputs['item2'] = nl2br($inputs['item2']);
        $inputs['item3'] = nl2br($inputs['item3']);
        $inputs['item4'] = nl2br($inputs['item4']);
        $Recipe = Discompose::create($inputs);

        return redirect('/');

    }

    public function showDiscomposeByGuild(Request $request){

        switch ($request->guild){
            case "beastman":
                $guildname = "獣人装備";
            break;
            case "special":
                $guildname = "特殊装備";
            break;
            case "d_woodworking":
                $guildname = "合成装備(木工)";
            break;
            case "d_smithing":
                $guildname = "合成装備(鍛冶)";
            break;
            case "d_goldsmithing":
                $guildname = "合成装備(彫金)";
            break;
            case "d_clothcraft":
                $guildname = "合成装備(裁縫)";
            break;
            case "d_leathercraft":
                $guildname = "合成装備(革細工)";
            break;
            case "d_bonecraft":
                $guildname = "合成装備(骨細工)";
            break;
            case "d_alchemy":
                $guildname = "合成装備(錬金術)";
            break;
            case "reassembling":
                $guildname = "リアセンブル";
            break;
            case "?":
                $guildname = "?";
            break;
            default:
        }

        $discomposes = Discompose::where('guild', $guildname)->get();
        $binding = ['title' => '分解' . $guildname,];
        return view('frontend.discompose', $binding, compact('discomposes'));
    }

        //編輯分解資料
    public function editDiscompose($id){
        //撈取分解資料
        $discomposeData = Discompose::findOrFail($id);

        $binding = [
            'title' => '編輯分解資料',
            'discomposeData' => $discomposeData,
        ];

        return view('auth.editdiscompose', $binding);
    }

    //更新分解資料
    public function updateDiscompose($id){
        //撈取分解資料
        $discomposeData = Discompose::findOrFail($id);
        //接收輸入資料
        $input = request()->all();
        $inputs['skill'] = nl2br($inputs['skill']);
        $inputs['item1'] = nl2br($inputs['item1']);
        $inputs['item2'] = nl2br($inputs['item2']);
        $inputs['item3'] = nl2br($inputs['item3']);
        $inputs['item4'] = nl2br($inputs['item4']);
        //寫入更新資料
        $discomposeData->update($input);
    }

    //刪除分解資料
    public function deleteDiscompose(Request $request){
        $discompose = Discompose::findOrFail($request->id);
        $discompose->delete();
        return redirect()->back();
    }

}
