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
        Schema::create('precious_metal_prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('gold');
            $table->decimal('silver');
            $table->decimal('palladium');
            $table->decimal('platinum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precious_metal_prices');
    }
};
