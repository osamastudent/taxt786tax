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
        Schema::create('soleproprietorbusinessntnregistrations', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('cnic_number')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('mobile_network')->nullable();
            $table->string('email')->nullable();
            $table->string('business_name')->nullable();
            $table->string('start_date')->nullable();
            $table->longText('business_activity_description')->nullable();
            $table->longText('business_address_electricity_bill')->nullable();
            $table->string('sales_tax_registration_required')->nullable();
            $table->string('picture_business_premises')->nullable();
            $table->string('paid_utility_bill')->nullable();
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
        Schema::dropIfExists('soleproprietorbusinessntnregistrations');
    }
};
