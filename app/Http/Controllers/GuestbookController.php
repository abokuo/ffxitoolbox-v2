<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Guestbook;

class GuestbookController extends Controller
{
    public function addGuestbook(){
        $inputs = request()->all();

        // 驗證規則
        $rules = [
                'guestName' => ['required', 'max:150'], //訪客名字
                'guestSubject' => ['required', 'max:150'], //留言標題
                'guestComment' => ['required'], //留言內容
                'h-captcha-response' => ['required|HCaptcha'], //圖型驗證
                ];

        // 驗證資料
        $validator = Validator::make($inputs, $rules);
        // 資料驗證錯誤時的處理
        if ($validator->fails()){
            return redirect('/guestbook')
            ->withErrors($validator)
            ->withInput();
        }

        $inputs['guestComment'] = nl2br($inputs['guestComment']);
        $guestbook = Guestbook::create($inputs);
        return redirect('/guestbook');

    }

    public function showGuestbook(){
        $guestbooks = Guestbook::orderBy('created_at', 'desc')->paginate(8);
        $binding = ['title' => '留言板',];
        return view('frontend.guestbook', $binding, compact('guestbooks'));
    }

    //編輯留言
    public function replyGuestbook($id){
        //撈取留言資料
        $guestbookData = Guestbook::findOrFail($id);

        $binding = [
            'title' => '編輯留言',
            'guestbookData' => $guestbookData,
        ];

        return view('auth.replyguestbook', $binding);
    }

    //更新留言
    public function updateGuestbook($id){
        //撈取留言資料
        $guestbookData = Guestbook::findOrFail($id);
        //接收輸入資料
        $inputs = request()->all();
        $inputs['adminReply'] = nl2br($inputs['adminReply']);
        //寫入更新資料
        $guestbookData->update($inputs);
        return redirect('/guestbook');
    }

    //編輯留言
    public function confirmDeleteGuestbook($id){
        //撈取留言資料
        $guestbookData = Guestbook::findOrFail($id);

        $binding = [
            'title' => '確認要刪除此留言嗎？',
            'guestbookData' => $guestbookData,
        ];

        return view('auth.deleteguestbook', $binding);
    }


    public function deleteGuestbook(Request $request){
        $guestbook = Guestbook::find($request->id);
        $guestbook->delete();
        $data['message'] = '留言已刪除';
        return redirect('/guestbook')->with($data);
    }

}
