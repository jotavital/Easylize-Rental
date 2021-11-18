<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPlano extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plano', function (Blueprint $table) {
            $table->renameColumn('nome_plano', 'nome');
            $table->integer('qtd_modelo_veiculo');
            $table->integer('qtd_marca_veiculo');
            $table->integer('qtd_fotos_modelo_veiculo');
            $table->integer('qtd_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plano', function (Blueprint $table) {
            $table->renameColumn('nome', 'nome_plano');
            $table->dropColumn('qtd_modelo_veiculo');
            $table->dropColumn('qtd_marca_veiculo');
            $table->dropColumn('qtd_fotos_modelo_veiculo');
            $table->dropColumn('qtd_usuario');
        });
    }
}
