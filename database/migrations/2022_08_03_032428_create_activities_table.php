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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('namaActivity')->nullable();
            $table->string('startDate')->nullable();
            $table->string('endDate')->nullable();
            $table->string('output')->nullable();
            $table->string('weightage')->nullable();
            $table->string('weightage_progress')->nullable();
            $table->string('output_progress')->nullable();
            $table->string('additionalOutput')->nullable();
            $table->string('remarks')->nullable();
            $table->string('document_pdf')->nullable();
            $table->string('leadAgency')->nullable();
            $table->string('user_id')->nullable();
            $table->string('initiative_id')->nullable();
            $table->string('cluster_id')->nullable();
            $table->string('program_id')->nullable();
            $table->string('plan_id')->nullable();

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
        Schema::dropIfExists('activities');
    }
};
