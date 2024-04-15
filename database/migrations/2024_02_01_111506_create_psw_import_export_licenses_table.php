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
        Schema::create('psw_import_export_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->text('cnic_copy')->nullable();
            $table->string('mobile_no_registered')->nullable();
            $table->string('email')->nullable();
            $table->string('business_letterhead')->nullable();
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
        Schema::dropIfExists('psw_import_export_licenses');
    }
};
