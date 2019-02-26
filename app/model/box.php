<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class box extends Model
{
    protected $fillable = [
        'laundry_id', 'user_id', 'status','kg', 'package_id',
    ];
}
