<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $appends = ['number_and_name'];
    public function getNumberAndNameAttribute()
    {
        return $this->number . ': ' . $this->name;
    }

    public function scopeDefaultOrder(Builder $query): Builder
    {
        return $query
            ->orderBy('type')
            ->orderByRaw("CAST(number AS UNSIGNED) * POW(10, (4 - LENGTH(number)))");
    }
}
