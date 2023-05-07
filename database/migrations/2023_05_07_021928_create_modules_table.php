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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('gold');
            $table->integer('silver');
            $table->integer('platinum');
            $table->integer('palladium');
            $table->integer('scandium');
            $table->integer('yttrium');
            $table->integer('lanthanum');
            $table->integer('cerium');
            $table->integer('praseodymium');
            $table->integer('neodymium');
            $table->integer('promethium');
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
        Schema::dropIfExists('modules');
    }
};
