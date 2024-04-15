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
        Schema::create('income_tax_filing_individuals', function (Blueprint $table) {
            $table->id();
            $table->string('tax_years')->nullable();
            $table->string('salary_income')->nullable();
            $table->string('rent_income')->nullable();
            $table->string('business_income')->nullable();
            $table->string('shares_capital_gain')->nullable();
            $table->string('other_income')->nullable();
            $table->string('withholding_adjustable')->nullable();
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
        Schema::dropIfExists('income_tax_filing_individuals');
    }
};
