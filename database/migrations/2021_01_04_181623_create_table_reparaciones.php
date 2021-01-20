<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReparaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparaciones', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('reparacion');
            $table->enum('urgencia',['Baja','Media','Alta']);
            $table->string('planta');
            $table->date('fecha_limite');
            $table->text('estado')->default('ESTROPEADO');
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
        Schema::table('reparaciones', function (Blueprint $table) {
            //
        });
    }
}
