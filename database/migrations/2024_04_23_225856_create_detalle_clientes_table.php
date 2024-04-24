<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('detalle_clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id'); 
            $table->string('telefono')->nullable(); 
            $table->text('direccion')->nullable(); 
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_clientes');
    }
};
