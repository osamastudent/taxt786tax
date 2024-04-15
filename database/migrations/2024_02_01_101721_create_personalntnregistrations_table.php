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
        Schema::create('personalntnregistrations', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('cnic_number')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('mobile_network')->nullable();
            $table->string('email')->nullable();
            $table->text('postal_address')->nullable();
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
        Schema::dropIfExists('personalntnregistrations');
    }
};
