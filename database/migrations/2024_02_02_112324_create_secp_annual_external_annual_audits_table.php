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
        Schema::create('secp_annual_external_annual_audits', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('company_status')->nullable();
            $table->string('share_capital')->nullable();
            $table->string('annual_turnover')->nullable();
            $table->string('annual_profit')->nullable();
            $table->string('current_auditor')->nullable();
            $table->string('reason_change_auditor')->nullable();
            $table->string('companies_incorporation_year')->nullable();
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
        Schema::dropIfExists('secp_annual_external_annual_audits');
    }
};
