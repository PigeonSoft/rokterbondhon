<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organizations';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'is_published',
    ];
}
