<?php

use App\Models\Lokaliti;
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
        Schema::create('negeri_parlimens', function (Blueprint $table) {
            $table->id();
            $table->string('parlimen_name')->nullable();
            $table->string('dun')->nullable();
            $table->string('negeri')->nullable();
            $table->string('user_id')->nullable();

            $table->foreignIdFor(Lokaliti::class);

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
        Schema::dropIfExists('negeri_parlimens');
    }
};
