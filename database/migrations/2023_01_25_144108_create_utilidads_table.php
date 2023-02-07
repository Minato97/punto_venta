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
        Schema::create('utilidades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ingresos')
                ->nullable()
                ->constrained('ingresos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_egresos')
                ->nullable()
                ->constrained('egresos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->decimal('utilidad');
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
        Schema::dropIfExists('utilidads');
    }
};
