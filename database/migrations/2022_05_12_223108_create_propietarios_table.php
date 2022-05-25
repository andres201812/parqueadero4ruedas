<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
			$table->string('nombre');
			$table->string('numerodocumento');
			$table->string('direccion')->nullable();
			$table->string('celular')->nullable();
			$table->string('email')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('propietarios');
    }
};
