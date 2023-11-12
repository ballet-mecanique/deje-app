<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['full_name'];

    public function companies()
    {
        return $this->belongsToMany('App\Models\Company', 'App\Models\Employee');
    }

    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}