<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Configuração da minha Migration!
class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    //Tablea com dados criada
     public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('describe');
            $table->string('criticality');
            $table->string('type');
            $table->string('status');

            
            
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
        Schema::dropIfExists('incidents');
    }
}
