<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personagens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->string("classe");
            $table->string("raca");
            $table->string("genero");
            $table->string("arma");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personagens');
    }
};
