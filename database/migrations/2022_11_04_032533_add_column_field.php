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
        Schema::table('initiatives', function (Blueprint $table) {
            $table->string('target_2')->nullable();
            $table->string('target_3')->nullable();
            $table->string('actual_achievement_1')->nullable();
            $table->string('actual_achievement_2')->nullable();
            $table->string('actual_achievement_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('initiatives', function (Blueprint $table) {
            $table->dropColumn('target_2')->nullable();
            $table->dropColumn('target_3')->nullable();
            $table->dropColumn('actual_achievement_1')->nullable();
            $table->dropColumn('actual_achievement_2')->nullable();
            $table->dropColumn('actual_achievement_3')->nullable();
        });
    }
};
