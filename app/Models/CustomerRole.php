<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerRole extends Model
{
    protected $table = 'customer_roles';

    protected $fillable = [
        'role_en',
        'role_zh',
    ];
}
