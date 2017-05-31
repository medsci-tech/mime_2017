<?php

namespace App\Http\Controllers;

use App\Models\OpenClassUnit;
use Illuminate\Http\Request;

class OpenClassController extends Controller
{
    public function index(){
        $units = OpenClassUnit::all();
        return $units;
    }

    public function unit($id){
        $unit = OpenClassUnit::find($id);
        return $unit;
    }
}
