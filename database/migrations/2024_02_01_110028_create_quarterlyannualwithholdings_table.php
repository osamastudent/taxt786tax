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
        Schema::create('quarterlyannualwithholdings', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
                        $table->string('fbr_id')->nullable();
                        $table->string('fbr_password')->nullable();
                        $table->string('invoices')->nullable();
                        $table->string('employees_salary_sheet')->nullable();
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
        Schema::dropIfExists('quarterlyannualwithholdings');
    }
};
