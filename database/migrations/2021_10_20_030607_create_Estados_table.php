<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('configuracion_id');
            $table->foreign('configuracion_id')->references('id')->on('configuraciones');
            $table->unsignedInteger('textColor_id');
            $table->foreign('textColor_id')->references('id')->on('colores');
            $table->unsignedInteger('backgroundColor_id');
            $table->foreign('backgroundColor_id')->references('id')->on('colores');
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
        Schema::dropIfExists('estados');
    }
}
