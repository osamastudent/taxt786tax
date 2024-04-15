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
        Schema::create('intellectual_property_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->nullable();
            $table->string('trademark')->nullable();
            $table->string('copyright')->nullable();
            $table->string('patent')->nullable();
            $table->string('iso_certification')->nullable();
            $table->string('halal_certification')->nullable();
            $table->string('other_certification_approval')->nullable();
            $table->text('business_name')->nullable();
            $table->string('yearly_revenue')->nullable();
            $table->string('yearly_profit')->nullable();
            $table->text('ntn_copy')->nullable();
            $table->text('visiting_card')->nullable();
            $table->string('products')->nullable();
            $table->text('business_description')->nullable();
            $table->text('pics_working_area')->nullable();
            $table->text('tax_return')->nullable();
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
        Schema::dropIfExists('intellectual_property_registrations');
    }
};
