<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOffice extends Model
{
    protected $table = 'customer_offices';

    protected $fillable = [
        'office_en',
        'office_zh',
    ];
}
