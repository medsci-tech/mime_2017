<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerInterest extends Model
{
    protected $table = 'customer_interests';

    protected $fillable = [
        'interest_en',
        'interest_zh',
    ];
}
