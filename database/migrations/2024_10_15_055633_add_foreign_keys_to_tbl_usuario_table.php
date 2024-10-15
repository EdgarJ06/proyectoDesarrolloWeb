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
        Schema::table('tbl_usuario', function (Blueprint $table) {
            $table->foreign(['id_estado'], 'tbl_usuario_ibfk_1')->references(['id'])->on('tbl_estado')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_rol'], 'tbl_usuario_ibfk_2')->references(['id_rol'])->on('tbl_rol')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_empresa'], 'tbl_usuario_ibfk_3')->references(['id_empresa'])->on('tbl_empresa')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_sucursal'], 'tbl_usuario_ibfk_4')->references(['id_sucursal'])->on('tbl_sucursal')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_usuario', function (Blueprint $table) {
            $table->dropForeign('tbl_usuario_ibfk_1');
            $table->dropForeign('tbl_usuario_ibfk_2');
            $table->dropForeign('tbl_usuario_ibfk_3');
            $table->dropForeign('tbl_usuario_ibfk_4');
        });
    }
};
