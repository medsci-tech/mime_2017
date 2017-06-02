<?php

namespace App\Http\Controllers;

use App\Http\Requests\Account\RegisterPost;
use App\Models\Customer;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function get_token(){
        return csrf_token();
    }
    // 登陆
    public function login(){
        return 'login view';
    }

    public function login_post(Request $request){
        $account = $request->input('phone');
        $password = $request->input('password');
        return 'login post';
    }

    // 注册
    public function register(){
        dd();
        return 'register view';
    }

    public function register_post(RegisterPost $request){
        $account = $request->input('phone');
        $password = $request->input('password');
        $role_id = $request->input('role_id');
        $hospital_id = $request->input('hospital_id');
        $head_url = $request->input('head_url');
        $name = $request->input('name');
        $sex = $request->input('sex');
        $age = $request->input('age');
        $title_id = $request->input('title_id');
        $office_id = $request->input('office_id');
        $interest_id = $request->input('interest_id');
        $if_authorized = $request->input('if_authorized');
        $invite_phone = $request->input('invite_phone');
        dd($request->all());
        $res = Customer::create($request->all());
      
        return $res;
    }

    // 忘记密码
    public function forgot_pwd(){
        return 'login view';
    }

    public function forgot_pwd_post(){
        return 'login view';
    }

}
