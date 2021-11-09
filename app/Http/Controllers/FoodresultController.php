<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foodresult;

class FoodresultController extends Controller
{
    public function showFoodresultByClass(Request $request)
    {
        switch ($request->class){
            case "meat_and_eggs":
                $classname = "肉・卵料理";
                $tw_classname = "肉、蛋料理";
            break;
            case "sedfood_dishes":
                $classname = "魚介料理";
                $tw_classname = "海鮮料理";
            break;
            case "vegetables":
                $classname = "野菜料理";
                $tw_classname = "蔬菜料理";
            break;
            case "soups":
                $classname = "スープ";
                $tw_classname = "湯類";
            break;
            case "breads_and_rise":
                $classname = "穀物料理";
                $tw_classname = "榖物料理";
            break;
            case "sweets":
                $classname = "スィーツ";
                $tw_classname = "甜點";
            break;
            case "drinks":
                $classname = "ドリンク";
                $tw_classname = "飲料";
            break;
            case "ingredients":
                $classname = "食材";
                $tw_classname = "食材";
            break;
            case "sedfood":
                $classname = "水産物";
                $tw_classname = "海產";
            break;
            case "others":
                $classname = "その他";
                $tw_classname = "其他";
            break;
            case "unknow":
                $classname = "?";
                $tw_classname = "不明";
            break;
            default:
        }
        $foodresults = Foodresult::where('class', $classname)->orderBy('name', 'asc')->paginate(25);
        $binding = ['title' => '食物效果：' . $tw_classname,];
        return view('frontend.foodresult', $binding, compact('foodresults'));
    }

    //增加食物效果資料
    public function addFoodresult()
    {
        $binding = [
            'title' => '增加食物效果資料',
        ];
        return view('auth.addfoodresult', $binding);
    }

    //寫入食物效果資料作業
    public function addFoodresultProcess()
    {
        $inputs = request()->all();
        $foodresult = Foodresult::create($inputs);

        return redirect('/');
    }

    //編輯食物效果資料
    public function editFoodresult($id)
    {
    //撈取資料
        $foodresultData = Foodresult::findOrFail($id);
        $binding = [
            'title' => '編輯食物效果資料',
            'foodresultData' => $foodresultData,
        ];

        return view('auth.editfoodresult', $binding);
    }

    //更新食物效果資料
    public function updateFoodresult($id){
    //撈取資料
        $foodresultData = Foodresult::findOrFail($id);
    //接收輸入資料
        $input = request()->all();
    //寫入更新資料
        $foodresultData->update($input);
    }

    //刪除食物效果資料
    public function deleteFoodresult(Request $request)
    {
        $foodresult = Foodresult::findOrFail($request->id);
        $foodresult->delete();
        return redirect()->back();
    }
}
