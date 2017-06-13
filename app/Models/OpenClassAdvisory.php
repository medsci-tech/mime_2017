<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenClassAdvisory extends Model
{
    protected $table = 'open_class_unit_advisories';

    protected $fillable = [
        'parent_id',
        'unit_id',
        'speaker_id',
        'role',
        'content',
    ];

    public function speaker(){
        return $this->belongsTo(Customer::class, 'speaker_id', 'id');
    }
}
