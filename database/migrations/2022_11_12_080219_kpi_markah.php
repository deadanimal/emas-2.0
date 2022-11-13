<?php

use App\Models\Kpi;
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
        Schema::create('kpi_markahs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Kpi::class);
            $table->integer('pencapaian')->nullable();
            $table->integer('peratus_pencapaian')->nullable();
            $table->integer('prestasi_kpi')->nullable();
            $table->integer('tahun')->nullable();
            $table->integer('sukuan_tahun')->nullable();
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
        Schema::dropIfExists('kpi_markahs');
    }
};
