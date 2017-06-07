<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $customer;

    public function __construct()
    {
        if(Auth::check()){
            $this->customer = $this->customerInfoFormat(Auth::user());
        }else{
            $this->customer = null;
        }
    }

    public function customerInfoFormat($customer){
        $save_data = [
            'id' => $customer->id,
            'name' => $customer->name,
            'head_url' => $customer->head_url, // 头像
            'phone' => $customer->phone,
        ];
        if($customer->hospital){
            $save_data['province'] = $customer->hospital->province;
            $save_data['city'] = $customer->hospital->city;
            $save_data['area'] = $customer->hospital->area;
            $save_data['hospital'] = $customer->hospital->name;
        }else{
            $save_data['province'] = '';
            $save_data['city'] = '';
            $save_data['area'] = '';
            $save_data['hospital_name'] = '';
        }
        if($customer->office){
            $save_data['office'] = $customer->office->office_zh;
        }else{
            $save_data['office'] = '';
        }
        if($customer->title){
            $save_data['title'] = $customer->title->title_zh;
        }else{
            $save_data['title'] = '';
        }
        return $save_data;
    }

    public function returnDataFormat($code = 200, $msg = '', $data = []){
        return ['statusCode' => $code, 'msg' => $msg, 'data' => $data];
    }
}
