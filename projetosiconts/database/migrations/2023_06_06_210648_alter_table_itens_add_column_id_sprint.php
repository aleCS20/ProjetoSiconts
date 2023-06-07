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
        Schema::table('itens', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('id_sprint')->after('id_item');
            $table->foreign('id_sprint')->references('id_sprint')->on('sprints');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('itens', function (Blueprint $table) {
            //
            $table->dropForeign('itens_id_sprint_foreign');
            $table->dropColumn('id_sprint');
        });
    }
};
