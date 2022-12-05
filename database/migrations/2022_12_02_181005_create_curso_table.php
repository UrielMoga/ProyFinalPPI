<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->decimal('precio', $precision=8,$escala=2)->nullable(false);
            $table->text('ruta')->nullable(false);
            $table->foreignId('categoria')->nullable(false);
            $table->text('archivo')->nullable(false);
            $table->text('rutaimagen')->nullable(false);
            $table->string('descripcion');
            $table->foreignId('usrins')->nullable(false);
            $table->timestamps();

            $table->foreign('categoria')->references('id')->on('categorias');
            $table->foreign('usrins')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
