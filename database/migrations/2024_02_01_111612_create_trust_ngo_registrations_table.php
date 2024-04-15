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
        Schema::create('trust_ngo_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
                        $table->string('registration_type')->nullable();
                        $table->string('name')->nullable();
                        $table->string('estimate_yearly_donation')->nullable();
                        $table->string('foreign_funding')->nullable();
                        $table->string('description')->nullable();
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
        Schema::dropIfExists('trust_ngo_registrations');
    }
};
