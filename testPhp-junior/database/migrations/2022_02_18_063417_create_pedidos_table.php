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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCliente', 100);
            $table->char('cpf', 11);
            $table->string('email');
            $table->date('data');
            $table->string('codBarras', 20);
            $table->string('nomeProduto', 100);
            $table->decimal('valorUnitario', total:3);
            $table->integer('quantidade');
            $table->timestamps();
        });
        Schema::table('pedidos', function (Blueprint $table){
            $table->foreignId('id_cliente')->constrained('clientes')->onDelete('cascade');
            $table->foreignId('id_produtos')->constrained('produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
