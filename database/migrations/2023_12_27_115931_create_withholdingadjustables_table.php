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
        Schema::create('withholdingadjustables', function (Blueprint $table) {
            $table->id();
            $table->string('fbr_computerized_payment_slips')->nullable();
            $table->string('tax_on_electricty_bill')->nullable();
            $table->string('mobile_phone_tax_certificate')->nullable();
            $table->string('car_purchase_transfer_annual_tax')->nullable();
            $table->string('any_other_tax_paid')->nullable();
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
        Schema::dropIfExists('withholdingadjustables');
    }
};
