<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeModeloVeiculoIdToFotosModeloVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fotos_modelo_veiculo', function (Blueprint $table) {
            $table->renameColumn('fk_modelo_veiculo', 'modelo_veiculo_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fotos_modelo_veiculo', function (Blueprint $table) {
            $table->renameColumn('modelo_veiculo_id', 'fk_modelo_veiculo');
        });
    }
}
