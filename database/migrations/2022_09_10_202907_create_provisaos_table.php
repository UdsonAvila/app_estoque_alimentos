<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provisaos', function (Blueprint $table) {
          $table->integer('id');
          $table->string('nome_local_armazenamento', 200);
          $table->integer('estoque_max');
          $table->integer('estoque_min');
          $table->integer('estoque_usado');
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
        Schema::dropIfExists('provisaos');
    }
};
