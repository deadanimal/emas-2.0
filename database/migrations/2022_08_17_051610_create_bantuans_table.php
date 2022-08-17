<?php

use App\Models\Info_kampung;
use App\Models\Profil_air;
use App\Models\Profil_kir;
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

            $table->string('user_id')->nullable();

            $table->foreignIdFor(Profil_kir::class);
            $table->foreignIdFor(Profil_air::class);
            $table->foreignIdFor(Info_kampung::class);
            $table->foreignIdFor(Rakan_strategik::class);

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
