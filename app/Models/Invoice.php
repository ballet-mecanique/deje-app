<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{

    protected $casts = [
        'amount' => 'float',
    ];

    protected $appends = [
        'sent_and_due',
        'amount_display',
        'company_date_and_amount',
        'is_electricity_cost'
    ];

    public function company(): belongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function getSentAndDueAttribute()
    {
        return 'sent: ' . date('d.m.Y', strtotime($this->invoice_date)) . ', due: ' . date('d.m.Y', strtotime($this->date_payable));
    }

    public function getAmountDisplayAttribute()
    {
        return $this->amount . ' SEK';
    }

    public function getCompanyDateAndAmountAttribute()
    {
        return $this->company?->name . ' ' . $this->sent_and_due . ' ' . $this->amount_display;
    }

    protected function isElectricityCost(): Attribute
    {
        return Attribute::make(
            get: function(){
                return str_contains($this->company?->name, "Ellevio") || str_contains($this->company?->name, "Fortum");
            }
        );
    }
}
