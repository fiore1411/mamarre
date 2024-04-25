<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('detalle_ticket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('detalle_ticket_id');
            $table->unsignedBigInteger('organizacion');
            $table->integer('destinatario')->default(1);
            $table->decimal('precio', 10, 2);
            $table->decimal('estado_de_pago', 10, 2);
            $table->decimal('fecha_pago', 10, 2);
            $table->timestamps();

            
        });
    }
   
    
    public function down()
    {
        Schema::dropIfExists('detalle_ticket');
    }
};
