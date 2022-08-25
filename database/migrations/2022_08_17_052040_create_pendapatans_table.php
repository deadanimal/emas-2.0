<?php

use App\Models\Profil;
use App\Models\Profil_air;
use App\Models\Profil_kir;
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
        Schema::create('pendapatans', function (Blueprint $table) {
            $table->id();
            $table->string('kod_perbelanjaan')->nullable();
            $table->string('jumlah_pendapatan')->nullable();
            $table->foreignIdFor(Profil::class)->nullable();
            $table->string('pendapatan_harta')->nullable();
            $table->string('kiriman_isi_rumah')->nullable();
            $table->string('nafkah')->nullable();
            $table->string('biasiswa')->nullable();
            $table->string('pencen')->nullable();
            $table->string('hadiah')->nullable();

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
        Schema::dropIfExists('pendapatans');
    }
};
