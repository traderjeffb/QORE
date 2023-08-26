<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            DB::statement("ALTER TABLE projects CHANGE `Currency` `currency` VARCHAR(255) NULL");
            DB::statement("ALTER TABLE projects CHANGE `Country` `country` VARCHAR(255) NULL");

        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('currency', 'Currency');
            $table->renameColumn('country', 'Country');
        });
    }
};
