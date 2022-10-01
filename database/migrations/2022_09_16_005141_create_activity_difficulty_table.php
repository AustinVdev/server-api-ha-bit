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
        Schema::create('activity_difficulty', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('points_reward');
            $table->timestamps();
        });

        Schema::table('activity', function (Blueprint $table) {
            $table->foreign("activity_difficulty_id")
                ->references("id")
                ->on("activity_difficulty");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_difficulty');
    }
};
