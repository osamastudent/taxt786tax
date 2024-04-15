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
        Schema::create('specific_items', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('image_heading')->nullable();
            $table->string('item_one')->nullable();
            $table->string('item_two')->nullable();
            $table->string('item_three')->nullable();
            $table->string('item_four')->nullable();
            $table->string('item_five')->nullable();
            $table->string('item_six')->nullable();
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
        Schema::dropIfExists('specific_items');
    }
};
