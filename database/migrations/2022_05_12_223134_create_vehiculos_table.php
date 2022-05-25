<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipovehiculo_id')->unsigned();
			$table->bigInteger('marca_id')->unsigned();
			$table->bigInteger('propietario_id')->unsigned();
			$table->string('placa');
            $table->timestamps();
			$table->foreign('tipovehiculo_id')
                ->references('id')->on('tipovehiculos');
			$table->foreign('marca_id')
                ->references('id')->on('marcas');
			$table->foreign('propietario_id')
                ->references('id')->on('propietarios');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
};
