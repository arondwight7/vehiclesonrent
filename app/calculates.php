<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calculates extends Model
{
    protected $fillable = ['name','vehiclename','excesshours','basiccharge','extracharge','totalcharge'];
}
