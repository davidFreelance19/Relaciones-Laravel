<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // php artisan make:model Author --migration instruccion para hacer la migracion y el modelo en la misma linea de comando
    /**
     * Run the migrations.
     */
    public function up(): void // Informacion que debe de contener el sistema
    {
        Schema::create('tareas', function (Blueprint $table) { // Blueprint es clase encargada de generar la estructura de la tabla
            $table->id();
            $table->string('titulo', 50);
            $table->string('descripcion', 455)->nullable();
            $table->boolean('done')->default(false);
            $table->timestamps();
        });
    }

    // Rollbacking sirve para echar hacia átras un lote de migracion
    // comando: php artisan rollback
    // comando para tirar todas las migraciones: php artisan migrate:reset
    /**
     * Reverse the migrations.
     */
    public function down(): void // Informacion necesaria para eliminar del sistema
    {
        Schema::dropIfExists('tareas');
    }
};
