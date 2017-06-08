<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenClass extends Model
{
    protected $table = 'open_classes';

    protected $fillable = [
        'teacher_id',
        'unit_id',
        'chapter_id',
        'section_number',
        'title',
        'abstract_content',
        'video_url',
        'video_app_id',
        'video_file_id',
        'video_duration',
        'score',
        'play_count',
    ];

    public function teacher(){
        return $this->belongsTo(Customer::class, 'teacher_id', 'id');
    }
}
