<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('computador', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_tienda')->unique();
            $table->string('almacenamiento');
            $table->integer('ram');
            $table->string('tarjeta_grafica');
            $table->decimal('precio', 10, 2);
            $table->text('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->string('procesador');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('computador');
    }
};
