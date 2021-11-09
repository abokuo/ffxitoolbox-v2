<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discompose;
use App\Models\Foodresult;
use App\Models\Recipe;


class SearchController extends Controller
{
        //搜尋功能
        public function search(Request $request){
            // 取得搜尋關鍵字
            $search = $request->input('search');

            // 查詢範圍
            $recipes = Recipe::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->orWhere('material1', 'LIKE', "%{$search}%")
                ->orWhere('material2', 'LIKE', "%{$search}%")
                ->orWhere('material3', 'LIKE', "%{$search}%")
                ->orWhere('material4', 'LIKE', "%{$search}%")
                ->orWhere('material5', 'LIKE', "%{$search}%")
                ->orWhere('material6', 'LIKE', "%{$search}%")
                ->orWhere('material7', 'LIKE', "%{$search}%")
                ->orWhere('material8', 'LIKE', "%{$search}%")
                ->get();

            $discomposes = Discompose::query()
                ->where('material1', 'LIKE', "%{$search}%")
                ->orwhere('name', 'LIKE', "%{$search}%")
                ->orWhere('HQ1', 'LIKE', "%{$search}%")
                ->orWhere('HQ2', 'LIKE', "%{$search}%")
                ->orWhere('HQ3', 'LIKE', "%{$search}%")
                ->get();

            $foodresults = Foodresult::query()
                ->where('Name', 'LIKE', "%{$search}%")
                ->get();

            $binding = [
                'search' => $search,
                'discomposes' => $discomposes,
                'foodresults' => $foodresults,
                'recipes' => $recipes,
            ];
            // 回傳搜尋結果，以搜尋頁面呈現
//            return view('frontend.search', compact('recipes'));
            return view('frontend.search', $binding);

        }

}
