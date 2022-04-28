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
        Schema::create('markahs', function (Blueprint $table) {
            $table->id();


            $table->string('bab_id')->nullable();
            $table->string('outcome_id')->nullable();
            $table->string('jenisKpi');
            $table->string('unitUkuran');
            $table->string('sasaran');
            $table->string('hadToleransi');
            $table->string('wajaran');
            $table->string('tahunAsas');
            $table->string('sumberData');
            $table->string('sumberPengesahan');


            $table->string('pemangkin_id')->nullable();
            $table->string('bidang_id')->nullable();
            $table->string('namaKpi');
            $table->string('prestasiKpi');
            $table->string('pencapaian');
            $table->string('hadVarian');
            $table->string('kekerapan');
            $table->string('peratusPencapaian');
            $table->string('peratusPencapaianAsas');
            $table->string('sasaran2021');
            $table->string('sasaran2022');
            $table->string('sasaran2023');
            $table->string('sasaran2024');
            $table->string('sasaran2025');

            
            $table->boolean('lulus')->nullable();
            $table->string('ditolak')->nullable();

            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('markahs');
    }
};
