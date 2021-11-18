<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableToAluguel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aluguel', function (Blueprint $table) {
            $table->dropColumn('data_cadastrado');
            $table->timestamps();
            $table->softDeletes();
            $table->renameColumn('fk_veiculo', 'veiculo_id');
            $table->renameColumn('fk_cliente', 'cliente_id');
            $table->renameColumn('fk_ocorrencia', 'ocorrencia_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aluguel', function (Blueprint $table) {
            $table->date('data_cadastrado');
            $table->dropTimestamps();
            $table->dropSoftDeletes();
            $table->renameColumn('veiculo_id', 'fk_veiculo');
            $table->renameColumn('cliente_id', 'fk_cliente');
            $table->renameColumn('ocorrencia_id', 'fk_ocorrencia');
        });
    }
}
