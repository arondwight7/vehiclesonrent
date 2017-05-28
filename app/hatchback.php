<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hatchback extends Model
{
    protected $fillable = ['imagepath','vehiclename','transmission','fuel','seats','price','deposit','excessph','availability'];
}
