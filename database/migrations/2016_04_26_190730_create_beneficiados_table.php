<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('feNa');
            $table->string('cedula');
             $table->string('entidad');
            $table->string('ciudadCC');
            $table->string('reciboServicio');//file
            $table->string('telefono');
            $table->string('direccion',50);
            $table->boolean('casaPropia');
            $table->date('feResidencia');
            
            $table->integer('junta_id')->unsigned();
            $table->foreign('junta_id')->references('id')->on('juntas');
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
        Schema::drop('beneficiados');
    }
}
