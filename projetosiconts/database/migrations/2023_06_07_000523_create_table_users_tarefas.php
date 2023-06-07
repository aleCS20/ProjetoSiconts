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
        Schema::create('users_tarefas', function (Blueprint $table) {

            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_tarefa');

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_tarefa')->references('id_tarefa')->on('tarefas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_tarefas');
    }
};
