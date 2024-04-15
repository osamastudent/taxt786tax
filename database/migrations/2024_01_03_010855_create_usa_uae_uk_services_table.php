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
        Schema::create('usa_uae_uk_services', function (Blueprint $table) {
            $table->id();
        $table->string('select_region')->nullable();
        $table->string('name')->nullable();
          $table->string('address')->nullable();
          $table->string('mobile_no')->nullable();
          $table->string('email')->nullable();
          $table->string('social_security_no_tax_no')->nullable();
          $table->string('data_birth')->nullable();
          $table->string('select_type_service')->nullable();
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
        Schema::dropIfExists('usa_uae_uk_services');
    }
};
