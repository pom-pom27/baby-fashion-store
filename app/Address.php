<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['address', 'city', 'telp', 'kd_pos', 'state', 'first_name', 'last_name'];
}
