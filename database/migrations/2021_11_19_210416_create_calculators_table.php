<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculators', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('financing_type');
            $table->integer('item_price');
            $table->string('production_data');
            $table->integer('self_deposit');
            $table->integer('number_of_installment');
            $table->string('redemption_value');
            $table->string('most_caring');
            $table->string('company_tax_id');
            $table->string('phone_number');
            $table->string('email');
            $table->mediumText('additional_information');
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
        Schema::dropIfExists('calculators');
    }
}
