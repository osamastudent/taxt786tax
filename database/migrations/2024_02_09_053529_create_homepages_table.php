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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->text('sec_one_h_one');
            $table->text('sec_one_h_two');
            $table->text('sec_one_text');
            $table->text('sec_one_image');
            $table->text('sec_one_btn_text');
            
            $table->string('sec_two_image_one');
            $table->text('sec_two_title_one');
            $table->text('sec_two_text_one');
            $table->string('sec_two_image_two');
            $table->text('sec_two_title_two');
            $table->text('sec_two_text_two');
            $table->string('sec_two_image_three');
            $table->text('sec_two_title_three');
            $table->text('sec_two_text_three');
            $table->string('sec_two_image_four');
            $table->text('sec_two_title_four');
            $table->text('sec_two_text_four');

             $table->text('sec_three_main_h');
            $table->string('sec_three_image_one');
            $table->string('sec_three_image_two');
            $table->string('sec_three_image_three');
            $table->string('sec_three_image_four');
            $table->string('sec_three_image_five');
            $table->string('sec_three_image_six');
            $table->string('sec_three_image_seven');
            $table->string('sec_three_image_eight');



            $table->text('sec_four_main_h');
            $table->text('sec_four_box_btn_text');

            $table->text('sec_four_box_one_title');
            $table->text('sec_four_box_one_text');
            $table->text('sec_four_box_two_title');
            $table->text('sec_four_box_two_text');
            $table->text('sec_four_box_three_title');
            $table->text('sec_four_box_three_text');
            $table->text('sec_four_box_four_title');
            $table->text('sec_four_box_four_text');
            $table->text('sec_four_box_five_title');
            $table->text('sec_four_box_five_text');
            
            $table->text('sec_five_main_h');
            $table->string('sec_five_image');
            $table->text('sec_five_google_map');

            $table->text('sec_six_main_h');
            $table->text('sec_six_text_one');
            $table->text('sec_six_text_two');
            $table->text('sec_six_text_three');
            $table->text('sec_six_text_four');
            $table->text('sec_six_text_five');
            $table->text('sec_six_text_six');
            $table->text('sec_seven_main_h');
            $table->text('sec_eight_main_h');
                        

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
        Schema::dropIfExists('homepages');
    }
};
