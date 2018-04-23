<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasdeChoquesSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diasde_choques__salas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nm_sala');
          $table->string('choques')->default('0');
          $table->string('seg')->default('0');
          $table->string('ter')->default('0');
          $table->string('quar')->default('0');
          $table->string('quin')->default('0');
          $table->string('sex')->default('0');
          $table->string('sab')->default('0');
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
        Schema::dropIfExists('diasde_choques__salas');
    }
}
