<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo');
            $table->string('tipo');
            $table->string('combustivel');
            $table->string('ano_fab');
            $table->string('fabricante');
            $table->string('cor');
            $table->unsignedInteger('carro_id');
            
            $table->timestamps();

            $table->unsignedInteger('user_id');
        
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('carros');
    }

    
    


}

   