<?php

use App\Models\Cluster;
use App\Models\User;
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
        Schema::table('sectorals', function (Blueprint $table) {
            $table->foreignIdFor(User::class)->nullable();
            $table->string('namaSectoral')->nullable();
            $table->string('category')->nullable();
            $table->string('desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sectorals', function (Blueprint $table) {
            //
        });
    }
};
