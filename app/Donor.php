<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = 'donors';
    protected $fillable = [
        'user_id',
        'name',
        's_district',
        's_address',
        'district',
        'address',
        'mobile',
        'blood_group',
        'donation_date',
        'gender',
        'birthday',
    ];
}
