<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias', function (Blueprint $table) {
          $table->integer('disciplinaId')->unsigned();
          $table->primary('disciplinaId');
          $table->string('seg')->default('0');
          $table->string('ter')->default('0');
          $table->string('quar')->default('0');
          $table->string('quin')->default('0');
          $table->string('sex')->default('0');
          $table->string('sab')->default('0');
          $table->foreign('disciplinaId')->references('id')->on('disciplinas');
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
        Schema::dropIfExists('dias');
    }
}
