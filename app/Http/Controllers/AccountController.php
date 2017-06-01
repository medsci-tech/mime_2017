<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // 登陆
    public function login(){
        return 'login view';
    }

    public function login_post(){
        return 'login post';
    }

    // 注册
    public function register(){
        return 'register view';
    }

    public function register_post(){
        return 'register post';
    }

    // 忘记密码
    public function forgot_pwd(){
        return 'login view';
    }

    public function forgot_pwd_post(){
        return 'login view';
    }

}
