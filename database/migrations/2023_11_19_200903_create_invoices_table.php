<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->date('invoice_date')->nullable();
            $table->string('invoice_number')->nullable();
            $table->decimal('amount')->nullable();
            $table->date('date_payable')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->default('unpaid');
            $table->date('date_paid')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
