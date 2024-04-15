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
        Schema::create('sales_taxations', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->text('mobile_no')->nullable();
            $table->text('email')->nullable();
            $table->text('tax_id_number')->nullable();
            $table->string('business_type')->nullable();
            $table->text('sales_receipts')->nullable();
            $table->text('invoices')->nullable();
            $table->text('other_documents')->nullable();
            $table->string('any_exemptions_exclusions')->nullable();
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
        Schema::dropIfExists('sales_taxations');
    }
};
