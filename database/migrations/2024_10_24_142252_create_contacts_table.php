<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Nome do contato
            $table->string('email')->nullable(); // Email do contato
            $table->string('phone')->nullable(); // Telefone do contato (opcional)
            $table->text('message')->nullable(); // Mensagem do contato
            $table->string('subject')->nullable(); // Assunto da mensagem (opcional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
