<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenClassUnit extends Model
{
    protected $table = 'open_class_units';

    protected $fillable = [
        'disease_id',
        'type_id',
        'title',
        'level_id',
        'if_free',
        'price',
        'class_count',
        'student_count',
        'score',
        'abstract_content',
        'video_url',
        'video_app_id',
        'video_file_id',
    ];

    public function disease(){
        return $this->belongsTo(Disease::class);
    }

    public function level(){
        return $this->belongsTo(OpenClassLevel::class);
    }

}
