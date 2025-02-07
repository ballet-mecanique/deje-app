<?php

namespace App\Console\Commands;

use App\Models\Invoice;
use Illuminate\Console\Command;

class LookupInvoiceYearsCommand extends Command
{
    protected $signature = 'lookup:invoice-years';

    protected $description = 'Command description';

    public function handle(): void
    {
        Invoice::query()
            ->whereNull('year')
            ->get()
            ->each(function (Invoice $invoice) {
                $invoice->update(['year' => substr($invoice->invoice_date, 0, 4)]);
            });
    }
}
