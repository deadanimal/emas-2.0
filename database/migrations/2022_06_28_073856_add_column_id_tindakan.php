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
        Schema::table('tindakans', function (Blueprint $table) {
            $table->string('fokus_id')->nullable();
            $table->string('pemangkin_id')->nullable();
            $table->string('bab_id')->nullable();
            $table->string('bidang_id')->nullable();
            $table->string('strategi_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tindakans', function (Blueprint $table) {
            $table->dropColumn('fokus_id')->nullable();
            $table->dropColumn('pemangkin_id')->nullable();
            $table->dropColumn('bab_id')->nullable();
            $table->dropColumn('bidang_id')->nullable();
            $table->dropColumn('strategi_id')->nullable();
        });
    }
};
