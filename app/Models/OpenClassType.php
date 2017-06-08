<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenClassType extends Model
{
    protected $table = 'open_class_types';

    protected $fillable = [
        'type_en',
        'type_zh',
        'parent_id',
        'parent_node',
    ];
}
