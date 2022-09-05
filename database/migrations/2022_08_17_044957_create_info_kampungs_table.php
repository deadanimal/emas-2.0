<?php

use App\Models\Lokaliti;
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
        Schema::create('info_kampungs', function (Blueprint $table) {
            $table->id();
            $table->string('agensi_penyelaras')->nullable();
            $table->string('nama_jawatankuasa_pembangunan')->nullable();
            $table->string('nama_kampung')->nullable();
            $table->string('pihak_berkuasa_tempatan')->nullable();
            $table->string('pusat_pertumbuhan_desa')->nullable();
            $table->string('taraf_kampung')->nullable();
            $table->string('jenis_kampung')->nullable();
            $table->string('keterangan_kampung')->nullable();
            $table->string('maklumat_kampung')->nullable();
            $table->string('alamat_kampung')->nullable();

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
        Schema::dropIfExists('info_kampungs');
    }
};
