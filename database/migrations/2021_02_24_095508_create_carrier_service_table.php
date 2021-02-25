<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrierServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrier_service', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('service_id');            
            $table->unsignedBigInteger('user_id');
            $table->string('full_price');
            $table->string('load_price');
            $table->string('auto_price');
            $table->timestamps();
            $table->foreign('service_id')
                ->references('id')
                ->on('add_services');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrier_service');
    }
}
