<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    protected $fillable = ['vehiclename','price','excesspricephour'];
}
