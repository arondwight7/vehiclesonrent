<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sedan extends Model
{
     protected $fillable = ['imagepath','vehiclename','transmission','fuel','seats','price'];
}
