<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
	protected $table = 'owner';
    protected $fillable = ['name','email','phoneno','address','pin','city'];
}
