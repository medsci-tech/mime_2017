<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function __construct()
    {
      $this->middleware('login');
    }

    public function index(){
//        return redirect('account/register');
        $res = Auth::user();
        dd($res);
//        return redirect('account/register');
    }
}
