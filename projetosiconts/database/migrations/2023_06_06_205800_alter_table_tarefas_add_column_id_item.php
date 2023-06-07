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
        Schema::table('tarefas', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_item')->after('id_tarefa');
            $table->foreign('id_item')->references('id_item')->on('itens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tarefas', function (Blueprint $table) {
            //
            $table->dropForeign('tarefas_id_item_foreign');
            $table->dropColumn('id_item');
        });
    }
};
