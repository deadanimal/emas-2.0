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
        Schema::create('perbelanjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Profil::class)->constrained()->cascadeOnDelete();
            $table->string('kod_perbelanjaan')->nullable();
            $table->string('jumlah_perbelanjaan')->nullable();
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
