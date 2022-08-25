<?php

use App\Models\Info_kampung;
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
        Schema::create('maklumat_penghulu_mukims', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penghulu')->nullable();
            $table->string('no_kad_pengenalan')->nullable();
            $table->string('no_tel_pejabat')->nullable();
            $table->string('no_tel_bimbit')->nullable();
            $table->string('tahun_mula_berkhidmat')->nullable();
            $table->string('tahun_tamat_berkhidmat')->nullable();

            $table->foreignIdFor(Info_kampung::class)->nullable();

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
        Schema::dropIfExists('maklumat_penghulu_mukims');
    }
};
