<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->string('currency'); // Currency code, e.g., EUR, JPY
            $table->decimal('rate', 10, 6); // Exchange rate with precision
            $table->timestamp('timestamp'); // Timestamp when the rate was retrieved
            // You can add other columns as needed, e.g., a 'country' column

            $table->unique('currency'); // Ensure unique currency entries
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchange_rates');
    }

};
