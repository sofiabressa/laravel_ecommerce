<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enderecos', function (Blueprint $table) {

            $table->id();

            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('CEP');
            $table->string('complemento')->nullable();

            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
