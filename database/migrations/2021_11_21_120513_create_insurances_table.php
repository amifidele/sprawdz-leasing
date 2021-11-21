<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type');
            $table->string('brand');
            $table->string('model');
            $table->string('version')->nullable();
            $table->string('engine_type');
            $table->string('power');
            $table->string('body_type');
            $table->integer('vin_number');
            $table->integer('vehicle_value');
            $table->string('vehicle_financing');
            $table->integer('year_of_production');
            $table->string('first_registration_date');
            $table->integer('vehicle_mileage');
            $table->string('registration_postal_code');
            $table->string('vehicle_parking_place');
            $table->string('driving_license_issue_date');
            $table->string('full_names');
            $table->string('pesel_number')->nullable();
            $table->integer('number_nip')->nullable();
            $table->string('phone_number');
            $table->string('email');
            $table->string('company_address');
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
        Schema::dropIfExists('insurances');
    }
}
