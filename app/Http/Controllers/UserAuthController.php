<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\Mailer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{
    // 註冊作業
    public function signupPage(){
        $binding = ['title' => '註冊'];
        return view('auth.signUp', $binding);
    }

    //  寫入註冊資料
    public function signupProcess(){
        $input = request()->all();
        // 驗證規則
        $rules = [
            'name' => ['required', 'max:50'], //名字
            'email' => ['required', 'max:150', 'email'], //電子郵件
            'password' => ['required', 'same:password_confirmation', 'min:6'], //密碼
            'password_confirmation' => ['required', 'min:6'], //確認密碼
            'type' => ['required', 'in:G,A'], //帳號類型
        ];
        // 驗證資料
        $validator = Validator::make($input, $rules);
        if ($validator->fails()){
            //資料驗證錯誤
            return redirect('user/auth/sign-up')->withErrors($validator)->withInput();
        }
        //密碼加密
        $input['password'] = Hash::make($input['password']);


        //通知信件
        $mailDetails=[
            'subject' => '您在 ffxitoolbox 的註冊資料',
            'title' => 'ffxitoolbox 註冊資訊',
            'body' => '歡迎 '. $input['name'] . ' 註冊 ffxitoolbox 網站',
            'email' => $input['email'],
        ];
        $mailSuccessMessage = "信件寄出";

        Mail::to($input['email'])->send(new Mailer($mailDetails));

        //會員註冊資料寫入
        $Users = User::create($input);
        $message = '註冊成功';
        return redirect('/')->with($mailSuccessMessage)->with($message);
    }

    // 登入作業
    public function logInPage(){
        $binding = [
            'title' => '登入',
        ];
        return view('auth.logIn', $binding);
    }

    // 登入處理
    public function logInProcess(){
        // 接收登入資料
        $input = request()->all();

        // 驗證規則
        $rules = [
            'email' => ['required', 'max:150', 'email'], //電子郵件
            'password' => ['required', 'min:6'], //密碼
            'h-captcha-response' => 'required|HCaptcha',
        ];
        // 驗證資料
        $validator = Validator::make($input, $rules);
        // 資料驗證錯誤時的處理
        if ($validator->fails()){
            return redirect('/user/auth/login')
            ->withErrors($validator)
            ->withInput();
        }

        // 獲取使用者資料
        $User = User::where('email', $input['email'])->firstOrFail();

        // 檢查登入密碼
        $is_password_correct = Hash::check($input['password'], $User->password);
        // 密碼錯誤回傳訊息
        if(!$is_password_correct){
            $error_message = [
                'msg' => '密碼錯誤',
            ];
            return redirect('user/auth/login')->withErrors($error_message)->withInput();
        }
        // 記錄會員 session 編號
        session()->put('user_id', $User->id);

        // 會員登入後重新導向至登入前畫面，如果沒有則重新導向至首頁
        return redirect()->intended('/');
    }

    public function logOut(){
        //清除 session
        session()->forget('user_id');
        //重新導向至首頁
        return redirect('/');
    }
}
