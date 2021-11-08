<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFieldsToPlano extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plano', function (Blueprint $table) {
            $table->renameColumn('qtd_alugueis', 'qtd_alugueis_mensais');
            $table->renameColumn('qtd_fotos_modelo_veiculo', 'qtd_fotos_por_modelo_veiculo');
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
            //
        });
    }
}
