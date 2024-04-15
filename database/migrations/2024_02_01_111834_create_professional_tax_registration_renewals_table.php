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
        Schema::create('professional_tax_registration_renewals', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->text('select_tatus')->nullable();
            $table->text('certificate_incorporation')->nullable();
            $table->text('ntn_certificate')->nullable();
            $table->text('audited_financial_statements')->nullable();
            $table->text('last_paid_challan')->nullable();
            $table->text('list_contractor')->nullable();
            $table->text('income_tax_returns')->nullable();
            $table->text('list_containing_names_numbers_owners')->nullable();
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
        Schema::dropIfExists('professional_tax_registration_renewals');
    }
};
