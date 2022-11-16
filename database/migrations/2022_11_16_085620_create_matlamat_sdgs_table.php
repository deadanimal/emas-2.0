<?php

use App\Models\Sdg;
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
        Schema::create('matlamat_sdgs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Sdg::class);
            $table->string('matlamat')->nullable();
            $table->string('huraian')->nullable();
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
        Schema::dropIfExists('matlamat_sdgs');
    }
};
