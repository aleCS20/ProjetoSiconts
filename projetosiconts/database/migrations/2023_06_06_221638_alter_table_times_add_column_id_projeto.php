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
        Schema::table('times', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_projeto')->after('id_time');
            $table->foreign('id_projeto')->references('id_projeto')->on('projetos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('times', function (Blueprint $table) {
            //
            $table->dropForeign('times_id_projeto_foreign');
            $table->dropColumn('id_projeto');
        });
    }
};