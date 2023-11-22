<?php

namespace App\Http\Controllers;

use App\Models\Invoice;

class AddInvoiceToSettlementController extends Controller
{
    public function __invoke($invoiceId, $settlementId): void
    {
        $invoice = Invoice::find($invoiceId);
        $invoice->settlement_id = $settlementId;
        $invoice->save();
    }
}
