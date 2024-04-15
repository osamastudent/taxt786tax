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
        Schema::create('sharescapitalgains', function (Blueprint $table) {
            $table->id();
             $table->string('cdc_statement')->nullable();
            $table->string('stock_broker_statement')->nullable();
            $table->string('nccpl_capital_gain_tax_certificate')->nullable();
            $table->string('cdc_dividend_statement')->nullable();
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
        Schema::dropIfExists('sharescapitalgains');
    }
};
