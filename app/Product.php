<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'email', 'mobile', 'password', 'city', 'state', 'pin'
    ];
}
