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
        Schema::create('company_formations', function (Blueprint $table) {

            $table->id();
            $table->string('user_email')->nullable();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('proposed_business_activity')->nullable();
            $table->string('select_business_type')->nullable();
            $table->text('ownership_inf_document')->nullable();
            $table->string('initial_capital_contribution')->nullable();
            $table->string('proposed_funding_sources')->nullable();
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
        Schema::dropIfExists('company_formations');
    }
};
