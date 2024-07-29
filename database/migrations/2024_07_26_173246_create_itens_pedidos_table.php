<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('itens_pedidos', function (Blueprint $table) {
            
            $table->id();

            $table->integer('quantidade');
            $table->decimal('valor', 10,2);
            $table->datetime('data_item');

            $table->foreignId('produto_id')->constrained('produtos')->onDelete('cascade');
            $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('itens_pedidos');
    }
};
