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
        Schema::create('secp_company_in_provincials', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->text('copy_company_ntn')->nullable();
            $table->text('cnic_copy_partners')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->text('form_two')->nullable();
            $table->text('incorporation_certificate')->nullable();
            $table->text('moa')->nullable();
            $table->text('aoa')->nullable();
            $table->text('paid_electricity_bill')->nullable();
            $table->text('tenancy_agreement_premises')->nullable();
            $table->text('bank_maintenance_certificate')->nullable();
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
        Schema::dropIfExists('secp_company_in_provincials');
    }
};
