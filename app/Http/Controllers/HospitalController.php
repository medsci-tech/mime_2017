<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function firstOrCreate(array $data){
        $res = Hospital::firstOrCreate($data);
        return $res;
    }

    public function query(array $data){
        $province = $data['province'];
        $city = $data['city'];
        $area = $data['area'];
        $name = $data['name'];
        $where = [];
        if($province){
            $where['province'] = $province;
            if($city){
                $where['city'] = $city;
                if($area){
                    $where['area'] = $area;
                    if($name){
                        $where['name'] = $name;
                    }
                }
            }
        }
        $res = Hospital::where($where)->get();

        $this->returnDataFormat(200, '', $res);
    }
}
