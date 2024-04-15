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
        Schema::create('income_taxations', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('job_title')->nullable();
            $table->text('address')->nullable();
            $table->string('salary_information')->nullable();
            $table->string('wage_information')->nullable();
            $table->string('emp_start_start_date')->nullable();
            $table->string('emp_start_end_date')->nullable();
            $table->text('two_form')->nullable();
            $table->text('ten_nine_form')->nullable();
            $table->string('investment_income')->nullable();
            $table->string('rental_income')->nullable();
            $table->string('self_emp_income')->nullable();
            $table->string('retirement_income')->nullable();
            $table->string('other_sources_income')->nullable();
            $table->string('medical_expenses')->nullable();
            $table->string('charitable_donations')->nullable();
            $table->string('mortgage_interest')->nullable();
            $table->string('property_taxes')->nullable();
            $table->string('education_expenses')->nullable();
            $table->string('other_tax_deductions_credits')->nullable();
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
        Schema::dropIfExists('income_taxations');
    }
};
