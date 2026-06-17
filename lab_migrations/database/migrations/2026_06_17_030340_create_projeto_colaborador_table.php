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
        Schema::create('projeto_colaborador', function (Blueprint $table) {
    $table->id();
    $table->foreignId('projeto_id')
          ->constrained('projetos')
          ->onDelete('cascade');
    $table->foreignId('colaborador_id')
          ->constrained('colaboradores')
          ->onDelete('cascade');
    $table->string('funcao');
    $table->date('data_entrada');
    $table->timestamps();
    $table->unique(['projeto_id', 'colaborador_id']); // unicidade composta
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projeto_colaborador');
    }
};
