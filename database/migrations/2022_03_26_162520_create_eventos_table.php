<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string("title",255);
            $table->text("descripcion");
            $table->dateTime("start");
            $table->dateTime("end");
            $table->unsignedBigInteger("id_aprendiz");
            $table->foreign('id_aprendiz')->references("id")->on("apprentices")->onUpdate("cascade")->onDelete("cascade");
            $table->unsignedBigInteger("id_medico");
            $table->foreign('id_medico')->references("id")->on("doctors")->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('eventos');
    }
}
