<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function() { return view('frontend.index'); })->name('home');

//使用者相關
Route::group(['prefix' => 'user'], function(){
    // 使用者驗證
    Route::group(['prefix' => 'auth'], function(){
        // 使用者註冊
//        Route::get('/sign-up', 'App\Http\Controllers\UserAuthController@signUpPage');
        // 寫入使用者註冊資料
//        Route::post('/sign-up', 'App\Http\Controllers\UserAuthController@signUpProcess');
        // 使用者登入
        Route::get('/login', 'App\Http\Controllers\UserAuthController@logInPage');
        // 使用者登入處理
        Route::post('/login', 'App\Http\Controllers\UserAuthController@logInProcess');
        // 使用者登出
        Route::get('/logout', 'App\Http\Controllers\UserAuthController@logOut');
    });
});

//合成資料
Route::group(['prefix' => 'recipe'], function(){
    Route::get('/add', 'App\Http\Controllers\RecipeController@addRecipeform')->middleware(['user.auth.admin']);
    Route::post('/add', 'App\Http\Controllers\RecipeController@addRecipeProcess')->middleware(['user.auth.admin']);
    Route::get('/{id}/edit', 'App\Http\Controllers\RecipeController@editRecipe')->name('recipe/{id}/edit')->middleware(['user.auth.admin']);
    Route::put('/{id}', 'App\Http\Controllers\RecipeController@updateRecipe')->middleware(['user.auth.admin']);
    Route::get('/{id}', 'App\Http\Controllers\RecipeController@deleteRecipe')->middleware(['user.auth.admin']);
//    Route::get('/{guild}', 'App\Http\Controllers\RecipeController@showRecipeByGuildAndRank')->name('recipe/{guild}');
    Route::get('/{guild}/{skillrank}', 'App\Http\Controllers\RecipeController@showRecipeByGuildAndRank')->name('recipe/{guild}/{skillrank}');
});
//時間表
Route::group(['prefix' => 'time'], function(){
    Route::get('/guild', function () {return view('frontend.guildtime');})->name('/time/guild');
    Route::get('/airship', function () {return view('frontend.airship');})->name('/time/airship');
    Route::get('/ship', function () {return view('frontend.ship');})->name('/time/ship');
});
//分解配方
Route::group(['prefix' => 'discompose'], function(){
    Route::get('/add', 'App\Http\Controllers\DiscomposeController@addDiscompose')->middleware(['user.auth.admin']);
    Route::post('/add', 'App\Http\Controllers\DiscomposeController@addDiscomposeProcess')->middleware(['user.auth.admin']);
    Route::get('/{guild}', 'App\Http\Controllers\DiscomposeController@showDiscomposeByGuild')->name('discompose/{guild}');
    Route::get('/{id}/edit', 'App\Http\Controllers\DiscomposeController@editDiscompose')->name('discompose/{id}/edit')->middleware(['user.auth.admin']);
    Route::put('/{id}', 'App\Http\Controllers\DiscomposeController@updateDiscompose')->middleware(['user.auth.admin']);
    Route::get('/{id}', 'App\Http\Controllers\DiscomposeController@deleteDiscompose')->middleware(['user.auth.admin']);
});
//食物效果
Route::group(['prefix' => 'foodresult'], function(){
    Route::get('/add', 'App\Http\Controllers\FoodresultController@addFoodresult')->middleware(['user.auth.admin']);
    Route::post('/add', 'App\Http\Controllers\FoodresultController@addFoodresultProcess')->middleware(['user.auth.admin']);
    Route::get('/{class}', 'App\Http\Controllers\FoodresultController@showFoodresultByClass')->name('foodresult/{class}');
    Route::get('/{id}/edit', 'App\Http\Controllers\FoodresultController@editFoodresult')->name('foodresult/{id}/edit')->middleware(['user.auth.admin']);
    Route::put('/{id}', 'App\Http\Controllers\FoodresultController@updateFoodresult')->middleware(['user.auth.admin']);
    Route::get('/{id}', 'App\Http\Controllers\DiscomposeController@deleteFoodresult')->middleware(['user.auth.admin']);
});
//留言板
Route::group(['prefix' => 'guestbook'], function(){
    Route::get('/', 'App\Http\Controllers\GuestbookController@showGuestbook')->name('guestbook');
    Route::post('/add', 'App\Http\Controllers\GuestbookController@addGuestbook')->name('/guestbook/add');
    Route::get('/{id}/edit', 'App\Http\Controllers\GuestbookController@replyGuestbook')->name('/guestbook/{id}/edit')->middleware(['user.auth.admin']);
    Route::put('/{id}', 'App\Http\Controllers\GuestbookController@updateGuestbook')->middleware(['user.auth.admin']);
    Route::get('/{id}/delete', 'App\Http\Controllers\GuestbookController@confirmDeleteGuestbook')->name('/guestbook/{id}/delete')->middleware(['user.auth.admin']);
    Route::delete('/{id}', 'App\Http\Controllers\GuestbookController@deleteGuestbook')->middleware(['user.auth.admin']);
});

//搜尋功能
Route::get('/search/', 'App\Http\Controllers\SearchController@search')->name('search');

//建立 sitemap
Route::get('/utilities/createsitemap', 'App\Http\Controllers\SiteController@createSitemap');
