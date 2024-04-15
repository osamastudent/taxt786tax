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
        Schema::create('federalsalestaxregistrations', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('fbr_id')->nullable();
            $table->string('fbr_password')->nullable();
            $table->string('electricity_bill')->nullable();
            $table->string('bank_account_maintenance_certificate')->nullable();
            $table->string('business_premises_picture')->nullable();
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
        Schema::dropIfExists('federalsalestaxregistrations');
    }
};
