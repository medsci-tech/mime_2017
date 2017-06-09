<?php

namespace App\Http\Controllers;

use App\Models\OpenClass;
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

    public function unitCatalogue($id){
        $unit = OpenClassUnit::find($id);
        return $id;
    }

    public function course($id){
        $course = OpenClass::find($id);
    }

}
