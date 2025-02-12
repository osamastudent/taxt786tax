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
        Schema::create('secpcompanyformations', function (Blueprint $table) {
            $table->id();    
            $table->string('user_email')->nullable(); 
                        $table->text("type_registraion")->nullable();
                        $table->text("suggested_name")->nullable();
                        $table->text("nic_front_back")->nullable();
                        $table->text("blood_relative_cnic")->nullable();
                        $table->text("mobile_no_registered_cnic")->nullable();
                        $table->text("email_registered_cnic")->nullable();
                        $table->text("company_address")->nullable();
                        $table->text("business_description")->nullable();
                        $table->text("witness_one_cnic")->nullable();
                        $table->text("witness_two_cnic")->nullable();
                                  
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
        Schema::dropIfExists('secpcompanyformations');
    }
};
