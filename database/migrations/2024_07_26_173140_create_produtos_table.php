<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {

            $table->id();

            $table->string('nome', 100);
            $table->decimal('valor', 10,2);
            $table->string('foto', 100)->nullable();
            $table->string('descricao', 255)->nullable();
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
