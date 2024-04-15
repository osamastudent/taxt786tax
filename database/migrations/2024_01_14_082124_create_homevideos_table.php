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
        Schema::create('homevideos', function (Blueprint $table) {
            $table->id();
                        $table->foreignId('video_category_id')->constrained('video_categories')->cascadeOnDelete();
             $table->text('video_link');
            $table->text('video_title');
            $table->text('video_description');
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
        Schema::dropIfExists('homevideos');
    }
};
