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
    Schema::create('pedidos_items', function (Blueprint $table) {
        $table->id();
        $table->integer('quantidade');              // fix 1
        $table->decimal('preco', 8, 2);            // fix 2
        $table->foreignId('pedido_id')
              ->constrained('pedidos');             // fix 3
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos_items_corrigido');
    }
};
