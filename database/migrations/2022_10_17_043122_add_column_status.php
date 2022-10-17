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
        Schema::table('milestones', function (Blueprint $table) {
            $table->boolean('lulus')->nullable();
            $table->boolean('ditolak')->nullable();
            $table->string('approver_remark')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('milestones', function (Blueprint $table) {
            $table->dropColumn('lulus')->nullable();
            $table->dropColumn('ditolak')->nullable();
            $table->dropColumn('approver_remark')->nullable();
            $table->dropColumn('status')->nullable();
        });
    }
};
