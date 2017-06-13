<?php

namespace App\Http\Controllers;

use App\Models\OpenClass;
use App\Models\OpenClassAdvisory;
use App\Models\OpenClassChapter;
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
        $classes = OpenClass::where(['unit_id' => $id])->get();
        return $unit;
    }

    public function unitCatalogue($id){
        $unit = OpenClassUnit::find($id);
        $lists = [];
        $chapters = OpenClassChapter::where(['unit_id' => $id])->get();
        foreach ($chapters as $key => $chapter){
            $lists[$key]['chapter_title'] = $chapter->title;
            $classes = OpenClass::where(['chapter_id' => $chapter->id])->get();
            foreach ($classes as $k => $class){
                $lists[$key]['list'][$k]['class_number'] = $class->section_number;
                $lists[$key]['list'][$k]['class_title'] = $class->title;
            }
        }
        return $lists;
    }

    public function unitAdvisory($id){
        $comments = [];
        $first_levels = OpenClassAdvisory::where(['unit_id' => $id, 'parent_id' => 0])->get();
        foreach ($first_levels as $key => $first_level){
            $comments[$key]['content'] = $first_level->content;
            $twice_levels = OpenClassAdvisory::where([
                'unit_id' => $id,
                'parent_id' => $first_level->id,
            ])->get();
            foreach ($twice_levels as $k => $twice_level){
                $comments[$key]['child'][$k] = $twice_level->content;
            }
        }

        return $comments;
    }

    public function course($id){
        $course = OpenClass::find($id);
    }

}
