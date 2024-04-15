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
        Schema::create('accounting_book_keeping_services', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
                        $table->text('entity_status')->nullable();
                        $table->text('share_capital')->nullable();
                        $table->text('annual_turnover')->nullable();
                        $table->text('annual_profit')->nullable();
                        $table->text('yearly_number_transaction')->nullable();
                        $table->text('year_established')->nullable();
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
        Schema::dropIfExists('accounting_book_keeping_services');
    }
};
