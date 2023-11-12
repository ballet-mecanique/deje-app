<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $guards = [];

    public function people()
    {
        return $this->hasMany('App\Models\Person');
    }

    public function companies()
    {
        return $this->hasMany('App\Models\Company');
    }
}