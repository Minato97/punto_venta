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
            $table->decimal('montoTotal');
            $table->foreignId('id_clientes')
                ->nullable()
                ->constrained('clientes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_estatus')
                ->nullable()
                ->constrained('estatus_compras_ventas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_categoria_factura')
                ->nullable()
                ->constrained('categorias_facturas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_descuentos')
                ->nullable()
                ->constrained('descuentos')
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
