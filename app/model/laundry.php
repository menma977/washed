<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class laundry extends Model
{
    protected $fillable = [
        'user_id', 'box_id', 'driver'
    ];
}
