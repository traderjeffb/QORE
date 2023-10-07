<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->string('name'); // Employee's name
            $table->unsignedBigInteger('id'); // Employee's ID
            $table->date('date_absent')->default(now()); // Date absent, default to today's date
            $table->string('reason'); // Reason for absence
            $table->text('note')->nullable(); // Optional note/comment

            // If you want to store the year separately, you can add a year field like this:
            // $table->integer('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendance', function (Blueprint $table) {
            // Define the reverse migration to drop the added columns if needed.
            $table->dropColumn(['name', 'id', 'date_absent', 'reason', 'note']);

            // If you added a year column, you can drop it here as well:
            // $table->dropColumn('year');
        });
    }
}
