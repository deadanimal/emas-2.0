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
            $table->string('PIC')->nullable();
            $table->string('position')->nullable();
            $table->string('phoneNo')->nullable();
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
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
            $table->dropColumn('PIC')->nullable();
            $table->dropColumn('position')->nullable();
            $table->dropColumn('phoneNo')->nullable();
            $table->dropColumn('email')->nullable();
            $table->dropColumn('email2')->nullable();
        });
    }
};
