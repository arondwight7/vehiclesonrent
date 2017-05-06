<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gear extends Model
{
    protected $fillable = ['imagepath','vehiclename','transmission','seats','price'];
}
