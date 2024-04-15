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
        Schema::create('secp_annual_compliances', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();            
            $table->string('company_name')->nullable();
                        $table->string('name')->nullable();
                        $table->string('company_status')->nullable();
                        $table->text('address')->nullable();
                        $table->string('ntn_number')->nullable();
                        $table->string('mobile_no')->nullable();
                        $table->text('filling_annual_return')->nullable();
                        $table->text('filling_balance_sheet_profit_loss')->nullable();
                        $table->text('filling_form_twentynine')->nullable();
                        $table->text('filling_income_tax_returns')->nullable();
                        $table->text('filling_sales_tax_returns')->nullable();
                        $table->text('compliance_with_companies_act')->nullable();
                        $table->text('compliance_with_securities')->nullable();
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
        Schema::dropIfExists('secp_annual_compliances');
    }
};
