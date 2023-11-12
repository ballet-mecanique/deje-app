<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('mytable')) {
            Schema::create('people', function (Blueprint $table) {
                $table->id();
                $table->string('last_name')->nullable();
                $table->string('first_name')->nullable();
                $table->string('street_1')->nullable();
                $table->string('street_2')->nullable();
                $table->string('post_code')->nullable();
                $table->string('city')->nullable();
                $table->foreignId('country_id')->nullable()->constrained();
                $table->string('phone')->nullable();
                $table->string('mobile')->nullable();
                $table->string('email')->nullable();
                $table->string('website')->nullable();
                $table->timestamps();
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
};
