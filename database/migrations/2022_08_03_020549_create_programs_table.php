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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('namaProgram')->nullable();
            $table->string('programLead')->nullable();
            $table->string('programTarget')->nullable();
            $table->string('leadAgency')->nullable();
            $table->string('progress')->nullable();
            $table->string('cost')->nullable();
            $table->string('source')->nullable();
            $table->string('totalDisbursed')->nullable();
            $table->string('totalAmount')->nullable();
            $table->string('user_id')->nullable();
            $table->string('initiative_id')->nullable();
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
        Schema::dropIfExists('programs');
    }
};
