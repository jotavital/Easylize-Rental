<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente', function (Blueprint $table) {
            $table->integer('endereco_id')->nullable()->after('data_nascimento');
            $table->foreign('endereco_id')->references('id')->on('endereco');
        });
        Schema::table('empresa', function (Blueprint $table) {
            $table->integer('endereco_id')->nullable()->after('tipo_telefone');
            $table->foreign('endereco_id')->references('id')->on('endereco');
        });
        Schema::table('funcionario', function (Blueprint $table) {
            $table->integer('endereco_id')->nullable()->after('tipo_telefone');
            $table->foreign('endereco_id')->references('id')->on('endereco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente', function (Blueprint $table) {
            $table->dropForeign('cliente_endereco_id_foreign');
        });
        Schema::table('empresa', function (Blueprint $table) {
            $table->dropForeign('empresa_endereco_id_foreign');
        });
        Schema::table('funcionario', function (Blueprint $table) {
            $table->dropForeign('funcionario_endereco_id_foreign');
        });
    }
}
