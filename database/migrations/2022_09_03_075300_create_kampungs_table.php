<?php

use App\Models\Daerah;
use App\Models\Negeri;
use App\Models\Negeri_mukim;
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
        Schema::create('kampungs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Negeri::class);
            $table->foreignIdFor(Daerah::class);
            $table->foreignIdFor(Negeri_mukim::class)->nullable();
            $table->string('namaKampung')->nullable();
            $table->string('alamat')->nullable();
            $table->string('maklumat')->nullable();
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
        Schema::dropIfExists('kampungs');
    }
};
