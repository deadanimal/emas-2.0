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
        Schema::table('kpis', function (Blueprint $table) {
            $table->string('q1')->nullable();
            $table->string('q2')->nullable();
            $table->string('q3')->nullable();
            $table->string('q4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kpis', function (Blueprint $table) {
            $table->dropColumn('q1')->nullable();
            $table->dropColumn('q2')->nullable();
            $table->dropColumn('q3')->nullable();
            $table->dropColumn('q4')->nullable();
        });
    }
};
