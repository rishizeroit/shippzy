<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_services', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->string('description');
            $table->string('logo');
            $table->tinyInteger('status')->default(1)->comment('0, 1');
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
        Schema::dropIfExists('add_services');
    }
}
