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
        Schema::table('kpis', function (Blueprint $table) {
            $table->string('tahun2021')->nullable();
            $table->string('tahun2022')->nullable();
            $table->string('tahun2023')->nullable();
            $table->string('tahun2024')->nullable();
            $table->string('tahun2025')->nullable();
            $table->string('tahun2026')->nullable();
            $table->string('kategoriSasaran')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kpis', function (Blueprint $table) {
            $table->dropColumn('tahun2021')->nullable();
            $table->dropColumn('tahun2022')->nullable();
            $table->dropColumn('tahun2023')->nullable();
            $table->dropColumn('tahun2024')->nullable();
            $table->dropColumn('tahun2025')->nullable();
            $table->dropColumn('tahun2026')->nullable();
            $table->dropColumn('kategoriSasaran')->nullable();
        });
    }
};
