<?php

use App\Models\Daerah;
use App\Models\Kampung;
use App\Models\Negeri;
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
        Schema::create('ketua_kampungs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_pejabat');
            $table->integer('tahun_mula');
            $table->integer('tahun_akhir');
            $table->string('no_kp');
            $table->string('no_telefon');
            $table->foreignIdFor(Negeri::class);
            $table->foreignIdFor(Daerah::class);
            $table->foreignIdFor(Kampung::class);
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
        Schema::dropIfExists('ketua_kampungs');
    }
};
