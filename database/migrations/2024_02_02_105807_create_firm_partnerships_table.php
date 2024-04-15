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
        Schema::create('firm_partnerships', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
                        $table->text('copy_firm_ntn')->nullable();
                        $table->text('cnic_copy_partners')->nullable();
                        $table->text('mobile_no')->nullable();
                        $table->string('email')->nullable();
                        $table->string('form_c')->nullable();
                        $table->text('partnership_deed')->nullable();
                        $table->text('paid_electricity_bill')->nullable();
                        $table->text('tenancy_agreement_ownership')->nullable();
                        $table->text('documents_business_premises')->nullable();
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
        Schema::dropIfExists('firm_partnerships');
    }
};
