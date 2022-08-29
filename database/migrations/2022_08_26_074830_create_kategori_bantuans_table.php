<?php

use App\Models\Profil;
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
        Schema::create('kategori_bantuans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Profil::class)->constrained()->cascadeOnDelete();
            $table->string('program_yang_diterima')->nullable();
            $table->string('bulan_semasa')->nullable();
            $table->string('selain')->nullable();
            $table->string('diperlukan')->nullable();
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
        Schema::dropIfExists('kategori_bantuans');
    }
};
