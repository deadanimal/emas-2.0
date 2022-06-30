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
        Schema::table('tindakans', function (Blueprint $table) {
            $table->boolean('lulus')->nullable();
            $table->boolean('ditolak')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tindakans', function (Blueprint $table) {
            $table->dropColumn('lulus')->nullable();
            $table->dropColumn('ditolak')->nullable();
        });
    }
};
