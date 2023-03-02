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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->decimal('monto_total')->default(0.00);
            $table->foreignId('id_estatus')
                ->nullable()
                ->constrained('estatus_compras_ventas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_proveedores')
                ->nullable()
                ->constrained('proveedores')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_descuentos')
                ->nullable()
                ->constrained('descuentos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_egresos')
                ->nullable()
                ->constrained('egresos')
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
        Schema::dropIfExists('compras');
    }
};
