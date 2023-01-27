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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto_total');
            $table->foreignId('id_clientes')
                ->nullable()
                ->contrained('clientes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_estatus')
                ->nullable()
                ->contrained('estatus')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_categoria')
                ->nullable()
                ->contrained('categorias_facturas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
