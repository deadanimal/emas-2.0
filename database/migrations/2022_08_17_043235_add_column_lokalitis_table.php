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
        Schema::table('lokalitis', function (Blueprint $table) {
            $table->longText('keterangan_lokaliti')->nullable();
            $table->string('negeri_mukim')->nullable();
            $table->longText('negeri_parlimen')->nullable();

            $table->string('user_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lokalitis', function (Blueprint $table) {
            //
        });
    }
};
