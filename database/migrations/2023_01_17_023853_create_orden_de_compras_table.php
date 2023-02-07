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
        Schema::create('ordenesDeCompra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_productos')
                ->nullable()
                ->constrained('productos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_compras')
                ->nullable()
                ->constrained('compras')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->integer('cantidad');
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
        Schema::dropIfExists('ordenesDeCompra');
    }
};
