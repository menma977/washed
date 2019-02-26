<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $fillable = [
        'name', 'description', 'price'
    ];
}
