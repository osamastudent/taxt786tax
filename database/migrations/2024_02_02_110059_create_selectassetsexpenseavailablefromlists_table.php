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
        Schema::create('selectassetsexpenseavailablefromlists', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('bank_statement')->nullable();
            $table->string('properties_purchased')->nullable();
            $table->string('prize_bond')->nullable();
            $table->string('cash')->nullable();
            $table->string('gold')->nullable();
            $table->integer('expense_during_the_year')->nullable();
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
        Schema::dropIfExists('selectassetsexpenseavailablefromlists');
    }
};
