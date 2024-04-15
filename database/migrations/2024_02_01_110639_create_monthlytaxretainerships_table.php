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
        Schema::create('monthlytaxretainerships', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_no')->nullable();
            $table->longText('address')->nullable();
            $table->string('fbr_sales')->nullable();
            $table->string('srb_sales')->nullable();
            $table->string('pra_sales')->nullable();
            $table->string('kpra_sales')->nullable();
            $table->string('bra_sales')->nullable();
            $table->string('fbr_withholding')->nullable();
            $table->string('quarterly_withholding')->nullable();
            $table->string('income_sales_planning')->nullable();
            $table->string('queries_tax_matters')->nullable();
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
        Schema::dropIfExists('monthlytaxretainerships');
    }
};
