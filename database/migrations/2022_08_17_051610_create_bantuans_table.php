<?php

use App\Models\Daerah;
use App\Models\Info_kampung;
use App\Models\Negeri;
use App\Models\Rakan_strategik;
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
        Schema::create('bantuans', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_bantuan')->nullable();
            $table->string('kod_program')->nullable();
            $table->string('tarikh_rekod')->nullable();
            $table->string('status')->nullable();
            $table->string('nama_bantuan')->nullable();
            $table->string('nama_kampung')->nullable();
            $table->string('kementerian')->nullable();
            $table->string('agensi')->nullable();
            $table->string('sektor')->nullable();
            $table->foreignIdFor(Negeri::class)->nullable();
            $table->foreignIdFor(Daerah::class)->nullable();
            $table->foreignIdFor(Info_kampung::class)->nullable();
            $table->foreignIdFor(Rakan_strategik::class)->nullable();
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
        Schema::dropIfExists('bantuans');
    }
};
