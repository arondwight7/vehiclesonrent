<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    protected $table = 'vehicles';
    protected $fillable = ['vregno','vname','vtype','vmake','vcc','vcat'];
}
