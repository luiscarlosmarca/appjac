
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juntas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('feResolucion');
            $table->integer('numResolucion');
            $table->string('barrio');
            $table->string('direccionSede');
            $table->string('presidenteCC');
            $table->string('nombreP');
            $table->string('nombreS');
            $table->string('secretariaCC');
            $table->string('telefono');
            $table->string('firmaP');
            $table->string('firmaS');
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
        Schema::drop('juntas');
    }
}
