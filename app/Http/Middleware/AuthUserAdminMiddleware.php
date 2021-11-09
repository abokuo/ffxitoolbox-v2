<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AuthUserAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // 預設不允許存取
        $is_allow_access = false;
        // 取得會員編號
        $user_id = session()->get('user_id');

        // 如果有登入將從 session 取得會員 id
        if(!is_null($user_id)){
            $User = User::findOrFail($user_id);
            // 會員類型為 A: 管理者的話允許存取
            if ($User->type == 'A'){
                $is_allow_access = true;
            }
        }

        if(!$is_allow_access){
        // 不允許存取時重新導向首頁
            return redirect()->to('/');
        }
        // 允許存取，繼續下個請求的處理
        return $next($request);
    }
}
