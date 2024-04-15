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
        Schema::create('incomepartnershipcompanies', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('fbr_id')->nullable();
            $table->string('fbr_password')->nullable();
            $table->string('bank_statement')->nullable();
            $table->string('financial_statement')->nullable();
            $table->string('business_assets')->nullable();
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
        Schema::dropIfExists('incomepartnershipcompanies');
    }
};
