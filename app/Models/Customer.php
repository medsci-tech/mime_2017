<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $table = 'customers';

    protected $fillable = [
        'role_id',
        'hospital_id',
        'title_id',
        'office_id',

        'phone',
        'password',
        'head_url',
        'name',
        'sex',
        'age',
        'if_authorized',
        'invite_phone',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo(CustomerRole::class);
    }

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }

    public function title(){
        return $this->belongsTo(CustomerTitle::class);
    }

    public function office(){
        return $this->belongsTo(CustomerOffice::class);
    }

}
