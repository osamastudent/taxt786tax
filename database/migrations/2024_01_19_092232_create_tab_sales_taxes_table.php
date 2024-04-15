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
        Schema::create('tab_sales_taxes', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('price')->nullable();
            $table->text('time')->nullable();
            $table->text('working_days')->nullable();
            $table->text('requirement')->nullable();
            $table->text('text_one')->nullable();
            $table->text('text_two')->nullable();
            $table->string('text_three')->nullable();
            $table->string('text_four')->nullable();
            $table->text('text_five')->nullable();
            $table->text('text_six')->nullable();
            $table->text('text_seven')->nullable();
            $table->text('text_eight')->nullable();
            $table->text('text_nine')->nullable();
            $table->text('text_ten')->nullable();
            $table->text('text_eleven')->nullable();
            $table->text('text_twelve')->nullable();
            $table->text('text_thirteen')->nullable();
            $table->text('text_fourteen')->nullable();
            $table->text('text_fifthteen')->nullable();
            $table->text('text_sixteen')->nullable();
            $table->text('text_seventeen')->nullable();
            $table->text('text_eighteen')->nullable();
            $table->text('text_nineteen')->nullable();
            $table->text('text_twenty')->nullable();
           
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
        Schema::dropIfExists('tab_sales_taxes');
    }
};
