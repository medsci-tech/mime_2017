<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
      $this->middleware('login');
    }

    public function index(){
        $res = Auth::user();
        dd($res);
    }

    // 信息编辑
    public function editProfile(){
        $res = Auth::user();
        return view('customer.profile',[
            'data' => $res,
        ]);
    }

    public function updateProfile(Request $request){
        $data = $request->all();
        $res = Customer::find(Auth::id())->update($data);
    }
}
