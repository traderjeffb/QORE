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
        Schema::create('benefits', function (Blueprint $table) {
            // Add your other table columns here

            $table->unsignedBigInteger('employee_id'); // Use unsignedBigInteger for the foreign key

            $table->foreign('employee_id')
                ->references('id')     // References the 'id' column in the 'employees' table
                ->on('employees')
                ->onDelete('cascade'); // Define the desired onDelete behavior (optional)

            $table->timestamps(); // Add timestamps if needed
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benefits'); // Define the table name to drop
    }
};
