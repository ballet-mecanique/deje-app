<?php

namespace App\Http\Controllers;

use App\Models\Invoice;

class RemoveInvoiceFromSettlementController extends Controller
{
    public function __invoke($invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);
        $invoice->settlement_id = null;
        $invoice->save();
    }
}
