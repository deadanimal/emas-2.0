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
        Schema::create('kpis', function (Blueprint $table) {
            $table->id();
            $table->string('namaKpi');

            $table->longText('keteranganKpi');

            $table->string('outcome_id')->nullable();
            $table->string('bab_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('pemangkin_id')->nullable();
            $table->string('bidang_id')->nullable();

            $table->string('jenisKpi')->nullable();
            $table->string('unitUkuran')->nullable();
            $table->string('sasaran')->nullable();
            $table->string('hadToleransi')->nullable();
            $table->string('wajaran')->nullable();
            $table->string('tahunAsas')->nullable();
            $table->string('sumberData')->nullable();
            $table->string('sumberPengesahan')->nullable();
            $table->string('prestasiKpi')->nullable();
            $table->string('pencapaian')->nullable();
            $table->string('hadVarian')->nullable();
            $table->string('kekerapan')->nullable();
            $table->string('peratusPencapaian')->nullable();
            $table->string('peratusPencapaianAsas')->nullable();
            $table->string('sasaran2021')->nullable();
            $table->string('sasaran2022')->nullable();
            $table->string('sasaran2023')->nullable();
            $table->string('sasaran2024')->nullable();
            $table->string('sasaran2025')->nullable();


            $table->boolean('lulus')->nullable();
            $table->string('ditolak')->nullable();


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
        Schema::dropIfExists('kpis');
    }
};
