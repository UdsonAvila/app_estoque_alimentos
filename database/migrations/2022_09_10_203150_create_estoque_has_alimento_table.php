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
        Schema::create('estoque_has_alimento', function (Blueprint $table) {
          $table->unsignedBigInteger('tb_estoque_id');
          $table->unsignedBigInteger('tb_alimento_id');

          $table->timestamps();

          $table->foreign('tb_estoque_id')->references('id')->on('provisao');

          $table->foreign('tb_alimento_id')->references('id')->on('alimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estoque_has_alimento');
    }
};
