<?php

namespace App\Http\Controllers;

use App\Models\OpenClassUnit as thisModel;
use Illuminate\Http\Request;

class OpenClassController extends Controller
{
    public function index(){
        $units = thisModel::all();
        return $units;
    }

    public function unit($id){
        $unit = thisModel::find($id);
        return $unit;
    }
}
