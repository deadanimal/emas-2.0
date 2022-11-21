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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('dalaman')->default(true);
        });

        Schema::table('fokusutamas', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });     
        
        Schema::table('perkarautamas', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('pemangkindasars', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('babs', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('kategoris', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('pemacus', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('bidangs', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('outcomes', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('kpis', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('strategis', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('inisiatifs', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('tindakans', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('sdgs', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('thrusts', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('nationals', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('keys', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('subs', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('kpi2s', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('milestones', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('thruses', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('strategies', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('clusters', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('initiatives', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('programs', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('plans', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('activities', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('bantuans', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('rakan_strategiks', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('pendapatans', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('kecacatans', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('hartas', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('simpanans', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('penyakits', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('perbelanjaans', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('kategori_bantuans', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('sectorals', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('kpi_markahs', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('tindakan_markahs', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('initiative_updates', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
        Schema::table('matlamat_sdgs', function (Blueprint $table) {
            $table->unsignedBigInteger('organisasi_id')->nullable();
        });                     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
