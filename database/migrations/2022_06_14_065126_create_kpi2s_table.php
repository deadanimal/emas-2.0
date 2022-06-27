<?php

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
        Schema::create('kpi2s', function (Blueprint $table) {
            $table->id();
            $table->string('namaKpi');
            $table->longText('keteranganKpi');
            $table->string('thrust_id')->nullable();
            $table->string('national_id')->nullable();
            $table->string('key_id')->nullable();
            $table->string('sub_id')->nullable();
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
        Schema::dropIfExists('kpi2s');
    }
};
