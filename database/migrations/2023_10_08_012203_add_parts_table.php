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
        Schema::create('parts', function (Blueprint $table)
        {
            $table->id();
            $table->integer('partNumber');
            $table->string('description');
            $table->string('category');
            $table->integer('inventory');
            $table->integer('caseSize');
            $table->integer('minimumInventory');
            $table->time('timestamps');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parts');
    }
};
