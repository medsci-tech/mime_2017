<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $user_login_key = 'user_login_key';
    protected $user;

    public function __construct()
    {
        $this->user = \Session::get($this->user_login_key);
    }

    public function returnDataFormat($code = 200, $msg = '', $data = []){
        return ['statusCode' => $code, 'msg' => $msg, 'data' => $data];
    }
}
