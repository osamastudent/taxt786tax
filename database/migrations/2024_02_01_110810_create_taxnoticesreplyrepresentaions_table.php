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
        Schema::create('taxnoticesreplyrepresentaions', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
                        $table->string('upload_notice')->nullable();
                        $table->longText('describe_case')->nullable();
                        $table->string('fbr_id')->nullable();
                        $table->string('fbr_password')->nullable();
                        $table->string('amount_involved')->nullable();
                        $table->string('mobile_no')->nullable();
                        $table->string('email')->nullable();
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
        Schema::dropIfExists('taxnoticesreplyrepresentaions');
    }
};
