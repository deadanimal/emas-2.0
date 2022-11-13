<?php

use App\Models\Initiative;
use App\Models\Initiative_update;
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
        Schema::create('initiative_updates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Initiative::class);
            $table->string('target')->nullable();
            $table->string('actual_achievement')->nullable();
            $table->string('target_1')->nullable();
            $table->string('actual_achievement_1')->nullable();
            $table->string('target_2')->nullable();
            $table->string('actual_achievement_2')->nullable();
            $table->string('target_3')->nullable();
            $table->string('actual_achievement_3')->nullable();
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
        Schema::dropIfExists('initiative_updates');
    }
};
