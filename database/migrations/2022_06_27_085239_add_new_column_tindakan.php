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
            $table->string('catatan2021')->nullable();
            $table->string('sasaran2021')->nullable();
            $table->string('statusPelaksanaan2021')->nullable();
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
            $table->dropColumn('catatan2021')->nullable();
            $table->dropColumn('sasaran2021')->nullable();
            $table->dropColumn('statusPelaksanaan2021')->nullable();
        });
    }
};
