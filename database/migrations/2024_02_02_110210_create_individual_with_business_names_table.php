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
        Schema::create('individual_with_business_names', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->text('business_ntn')->nullable();
            $table->text('cnic_all_directors')->nullable();
            $table->text('passports_directors')->nullable();
            $table->text('memorandum_articles')->nullable();
            $table->text('form_twentynine')->nullable();
            $table->text('incorporation_certificate')->nullable();
            $table->text('partnership_deed')->nullable();
            $table->text('firm_registration_certificate')->nullable();
            $table->text('business_bank_statement')->nullable();
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
        Schema::dropIfExists('individual_with_business_names');
    }
};
