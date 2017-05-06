<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moped extends Model
{
    protected $fillable = ['imagepath','vehiclename','transmission','seats','price'];
}
