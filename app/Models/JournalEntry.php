<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{

    protected $appends = ['date_display', 'amount_display'];
    protected $casts = [
        'amount' => 'float',
    ];

    public function getDateDisplayAttribute()
    {
        return date('d.m.Y', strtotime($this->date));
    }

    public function getAmountDisplayAttribute()
    {
        return $this->amount . ' DKK';
    }
}
