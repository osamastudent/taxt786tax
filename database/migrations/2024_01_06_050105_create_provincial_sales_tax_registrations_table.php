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
        Schema::create('provincial_sales_tax_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('SRB')->nullable();
            $table->string('PRA')->nullable();
            $table->string('KPRA')->nullable();
            $table->string('BRA')->nullable();
            $table->string('select-status')->nullable();
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
        Schema::dropIfExists('provincial_sales_tax_registrations');
    }
};
