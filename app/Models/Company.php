<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class, 'company_id')->orderBy('invoice_date', 'desc');
    }
}
