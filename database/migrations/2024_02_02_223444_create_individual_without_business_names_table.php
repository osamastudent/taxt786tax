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
        Schema::create('individual_without_business_names', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->text('personal_ntn')->nullable();
            $table->text('cnic_both_sides')->nullable();
            $table->text('personal_bank_account_letter_certificate')->nullable();
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
        Schema::dropIfExists('individual_without_business_names');
    }
};
