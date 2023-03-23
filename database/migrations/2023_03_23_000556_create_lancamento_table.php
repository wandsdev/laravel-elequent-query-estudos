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
        Schema::create('lancamento', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 255);
            $table->integer('valor');
            $table->date('data');
            $table->unsignedBigInteger('tipo_lancamento_id');
            $table->foreign('tipo_lancamento_id')->references('id')->on('tipo_lancamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lancamento');
    }
};
