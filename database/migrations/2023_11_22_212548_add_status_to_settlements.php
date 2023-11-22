<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('settlements', function (Blueprint $table) {
            $table->boolean('is_locked')->default(false)->after('date');
        });
    }

    public function down(): void
    {
        Schema::table('settlements', function (Blueprint $table) {
            //
        });
    }
};
