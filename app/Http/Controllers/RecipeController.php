<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\User;

class RecipeController extends Controller
{
    public function addRecipeform(){
        $binding = [
            'title' => '增加配方',
        ];
        return view('auth.addrecipe', $binding);
    }

    public function addRecipeProcess(){
        $inputs = request()->all();
        $inputs['skill'] = nl2br($inputs['skill']);
        $inputs['item1'] = nl2br($inputs['item1']);
        $inputs['item2'] = nl2br($inputs['item2']);
        $inputs['item3'] = nl2br($inputs['item3']);
        $inputs['item4'] = nl2br($inputs['item4']);
        $Recipe = Recipe::create($inputs);

        return redirect('/');

    }

    public function showRecipeByGuild(Request $request){
        switch ($request->guild){
            case "woodworking":
                $guildname = "木工";
            break;
            case "smithing":
                $guildname = "鍛冶";
            break;
            case "goldsmithing":
                $guildname = "彫金";
            break;
            case "clothcraft":
                $guildname = "裁縫";
            break;
            case "leathercraft":
                $guildname = "革細工";
            break;
            case "bonecraft":
                $guildname = "骨細工";
            break;
            case "alchemy":
                $guildname = "錬金術";
            break;
            case "cooking":
                $guildname = "調理";
            break;
            default:
        }
        $recipes = Recipe::where('guild', $guildname)->get();
        $binding = ['title' => $guildname . '配方',];
        return view('frontend.recipe', $binding, compact('recipes'));
    }

    public function showRecipeByGuildAndRank(Request $request){

        switch ($request->guild){
            case "woodworking":
                $guildname = "木工";
            break;
            case "smithing":
                $guildname = "鍛冶";
            break;
            case "goldsmithing":
                $guildname = "彫金";
            break;
            case "clothcraft":
                $guildname = "裁縫";
            break;
            case "leathercraft":
                $guildname = "革細工";
            break;
            case "bonecraft":
                $guildname = "骨細工";
            break;
            case "alchemy":
                $guildname = "錬金術";
            break;
            case "cooking":
                $guildname = "調理";
            break;
            default:
        }

        switch ($request->skillrank){
            case "s10":
                $rankname = "素人";
            break;
            case "s20":
                $rankname = "見習";
            break;
            case "s30":
                $rankname = "徒弟";
            break;
            case "s40":
                $rankname = "下級";
            break;
            case "s50":
                $rankname = "名取";
            break;
            case "s60":
                $rankname = "目録";
            break;
            case "s70":
                $rankname = "印可";
            break;
            case "s80":
                $rankname = "高弟";
            break;
            case "s90":
                $rankname = "皆伝";
            break;
            case "s100":
                $rankname = "師範";
            break;
            case "s110":
                $rankname = "高級";
            break;
            default:
        }

        if(isset($request->guild) && !isset($request->skillrank)){
            $recipes = Recipe::where('guild', $guildname)->orderBy('id', 'asc')->orderBy('skill', 'asc')->get();
            $binding = [
                'title' => $guildname . '配方：',
            ];

        }

        if(isset($request->guild) && isset($request->skillrank)){
            $recipes = Recipe::where('guild', $guildname)->where('skillrank', $rankname)->orderBy('id', 'asc')->orderBy('skill', 'asc')->get();
            $binding = [
                'title' => $guildname . '配方：' . $rankname,
            ];
        }

//        return view('frontend.recipe', $binding, compact('recipes', 'userAdmin'));
        return view('frontend.recipe', $binding, compact('recipes'));
    }

    //編輯配方
    public function editRecipe($id){
        //撈取配方資料
        $recipeData = Recipe::findOrFail($id);

        $binding = [
            'title' => '編輯配方',
            'recipeData' => $recipeData,
        ];

        return view('auth.editrecipe', $binding);
    }

    //更新配方
    public function updateRecipe($id){
        //撈取配方資料
        $recipeData = Recipe::findOrFail($id);
        //接收輸入資料
        $inputs = request()->all();
        $inputs['skill'] = nl2br($inputs['skill']);
        $inputs['item1'] = nl2br($inputs['item1']);
        $inputs['item2'] = nl2br($inputs['item2']);
        $inputs['item3'] = nl2br($inputs['item3']);
        $inputs['item4'] = nl2br($inputs['item4']);
        //寫入更新資料
        $recipeData->update($inputs);
        return redirect()->back();
    }

    //刪除配方
    public function deleteRecipe(Request $request){
        $recipe = Recipe::findOrFail($request->id);
        $recipe->delete();
        return redirect()->back();
    }

}
