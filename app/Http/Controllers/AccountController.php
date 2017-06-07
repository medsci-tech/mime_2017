<?php

namespace App\Http\Controllers;

use App\Http\Requests\Account\RegisterPost;
use App\Models\Customer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    use AuthenticatesUsers;

    public function username(){
        return 'phone';
    }

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
        $res = Auth::attempt(['phone' => $account, 'password' => $password]);
        if($res){
            return $this->returnDataFormat(200, '登陆成功');
        }else{
            return $this->returnDataFormat(500, '登陆失败');
        }
    }

    // 注册
    public function register(){
        return 'register view';
    }

    public function register_post(Request $request){
        $account = $request->input('phone');
        $check_phone = Customer::where('phone', $account)->first();
        if($check_phone){
            return $this->returnDataFormat(422, '手机号已注册');
        }
        $password = $request->input('password');
        $data = $request->all();
        $data['password'] = bcrypt($password);
        $res = Customer::create($data);
        if($res){
            return $this->returnDataFormat(200, '注册成功');
        }else{
            return $this->returnDataFormat(500, '注册失败');
        }
    }

    // 忘记密码
    public function forgot_pwd(){
        return 'login view';
    }

    public function forgot_pwd_post(){
        return 'login view';
    }

}
