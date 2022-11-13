<?php

use App\Models\Tindakan;
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
        Schema::create('tindakan_markahs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tindakan::class);
            $table->string('status_pelaksanaan')->nullable();
            $table->string('catatan')->nullable();
            $table->string('sasaran')->nullable();
            $table->string('pencapaian')->nullable();
            $table->string('kemajuan_tindakan')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('sukuan_tahun')->nullable();
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
        Schema::dropIfExists('tindakan_markahs');
    }
};
