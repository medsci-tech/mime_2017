<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerTitle extends Model
{
    protected $table = 'customer_titles';

    protected $fillable = [
        'title_en',
        'title_zh',
    ];
}
