<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $casts = [
        'amount' => 'float',
    ];

    protected $appends = ['sent_and_due', 'amount_display', 'company_date_and_amount'];

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
}
