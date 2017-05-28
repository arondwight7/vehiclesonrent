<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $fillable = ['name','dl','vehicletaken','bprice','deposit','excessph','excessh'];
}
