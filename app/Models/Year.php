<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Year extends Model
{
    protected $with = ['invoices.company'];

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class, 'year', 'year');
    }
}
