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
        Schema::create('salestaxmonthlyfilings', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('select_authority')->nullable();
            $table->string('select_year')->nullable();
            $table->string('select_month')->nullable();
            $table->string('upload_purchase_invoices')->nullable();
            $table->string('upload_sales_invoices')->nullable();
            $table->string('purchase_sheet')->nullable();
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
        Schema::dropIfExists('salestaxmonthlyfilings');
    }
};
