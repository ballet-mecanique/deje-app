<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use BalletMecanique\PianolaLaravel\Http\Controllers\RecordsController;

class SettlementController extends Controller
{
    public function show($id)
    {
        $controller = new RecordsController();
        $record = $controller->show('settlements', $id);
        //append all unsettled invoices
        $unsettledInvoiced = Invoice::whereNull('settlement_id')->orderBy('invoice_date')->get()->load('company');
        $record->unsettled_invoices = $unsettledInvoiced;
        return $record;
    }
}
