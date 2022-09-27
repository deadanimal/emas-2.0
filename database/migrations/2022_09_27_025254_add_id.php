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
        Schema::table('thrusts', function (Blueprint $table) {
            $table->string('national_id')->nullable();
            $table->string('key_id')->nullable();
            $table->string('sub_id')->nullable();
            $table->string('milestone_id')->nullable();
            $table->string('kpi_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thrusts', function (Blueprint $table) {
            $table->dropColumn('national_id')->nullable();
            $table->dropColumn('key_id')->nullable();
            $table->dropColumn('sub_id')->nullable();
            $table->dropColumn('milestone_id')->nullable();
            $table->dropColumn('kpi_id')->nullable();
        });
    }
};
