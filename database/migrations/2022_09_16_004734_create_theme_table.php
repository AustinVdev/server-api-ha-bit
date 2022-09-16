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
        Schema::create('theme', function (Blueprint $table) {
            $table->id();
            $table->string('tittle', 50);
            $table->string('color_code', 50);
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::table('user', function (Blueprint $table) {
            $table->foreign("theme_id")
                ->references("id")
                ->on("theme");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theme');
    }
};
