<?php

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
        Schema::create('perbelanjaans', function (Blueprint $table) {
            $table->id();
            $table->string('kod_perbelanjaan')->nullable();
            $table->string('jumlah_perbelanjaan')->nullable();

            $table->foreignIdFor(Profil_kir::class);
            $table->foreignIdFor(Profil_air::class);
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
        Schema::dropIfExists('perbelanjaans');
    }
};
