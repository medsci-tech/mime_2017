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

    public function save_session($user){
        $save_data = [
            'id' => $user->id,
            'name' => $user->name,
            'head_url' => $user->head_url, // 头像
            'phone' => $user->phone,
            'office' => $user->office->office_zh, // 科室
            'title' => $user->title->title_zh, // 职称
        ];
        if($user->hospital){
            $save_data['province'] = $user->hospital->province;
            $save_data['city'] = $user->hospital->city;
            $save_data['area'] = $user->hospital->area;
            $save_data['hospital_name'] = $user->hospital->name;
        }else{
            $save_data['province'] = '';
            $save_data['city'] = '';
            $save_data['area'] = '';
            $save_data['hospital_name'] = '';
        }
        \Session::set($this->user_login_key, $save_data);
        return $save_data;
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
//        dd();
        return 'register view';
    }

    public function register_post(Request $request){
        $account = $request->input('phone');
        $check_phone = Customer::where('phone', $account)->first();
        if($check_phone){
            $this->returnDataFormat(422, '手机号已注册');
        }
        $password = $request->input('password');
        $data = $request->all();
        $data['password'] = bcrypt($password);
        $res = Customer::create($data);
        if($res){
            $save_session = $this->save_session($res);
            $this->returnDataFormat(200, '注册成功', $save_session);
        }else{
            $this->returnDataFormat(500, '注册失败');
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
