<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SettlementPayer extends Model
{
    protected $appends = ['amount'];

    public function settlement(): BelongsTo
    {
        return $this->belongsTo(Settlement::class);
    }


    public function getAmountAttribute()
    {
        $numberOfPayers = 3;
        $amount = $this->settlement?->invoices?->sum('amount');
        return number_format($amount / $numberOfPayers, 2);
    }
}
