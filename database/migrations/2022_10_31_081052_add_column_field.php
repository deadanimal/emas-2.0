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
        Schema::table('subs', function (Blueprint $table) {
            $table->string('agency')->nullable();
            $table->string('name')->nullable();
            $table->string('division')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subs', function (Blueprint $table) {
            $table->dropColumn('agency')->nullable();
            $table->dropColumn('name')->nullable();
            $table->dropColumn('division')->nullable();
            $table->dropColumn('email')->nullable();
        });
    }
};
