<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenClassLevel extends Model
{
    protected $table = 'open_class_levels';

    protected $fillable = [
        'name_en',
        'name_zh',
    ];
}
