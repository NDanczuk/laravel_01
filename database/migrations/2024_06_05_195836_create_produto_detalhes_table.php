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
        Schema::create('produto_detalhes', function (Blueprint $table) {
            // Colunas
            $table->id();
            $table->unsignedBigInteger('produto_id'); // Quando usamos uma chave estrangeira usamos o singular do nome de sua tabela original e o atributo, neste caso produto_id
            $table->decimal('comprimento', 8, 2);
            $table->decimal('largura', 8, 2);
            $table->decimal('altura', 8, 2);
            $table->timestamps();

            // Constraint
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->unique('produto_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_detalhes');
    }
};
