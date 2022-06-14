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
            $table->string('kementerian_penyelaras')->nullable();
            $table->string('kementerian_pelaksana')->nullable();
            $table->string('tempohSiap')->nullable();
            $table->string('kategoriSasaran')->nullable();
            $table->string('statusPelaksanaan')->nullable();
            $table->string('catatan2022')->nullable();
            $table->string('sasaran2022')->nullable();
            $table->string('pencapaian2022')->nullable();




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
            $table->dropColumn('kementerian_penyelaras')->nullable();
            $table->dropColumn('kementerian_pelaksana')->nullable();
            $table->dropColumn('tempohSiap')->nullable();
            $table->dropColumn('kategoriSasaran')->nullable();
            $table->dropColumn('statusPelaksanaan')->nullable();
            $table->dropColumn('catatan2022')->nullable();
            $table->dropColumn('sasaran2022')->nullable();
            $table->dropColumn('pencapaian2022')->nullable();        });
    }
};
