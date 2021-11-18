<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsToAluguel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aluguel', function (Blueprint $table) {
            $table->renameColumn('data_inicio', 'data_hora_saida');
            $table->renameColumn('data_prevista_devolucao', 'data_hora_prevista_devolucao');

            $table->dropColumn('hora_inicio');
            $table->dropColumn('hora_devolucao');

            $table->renameColumn('data_devolucao', 'data_hora_devolucao');
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
            $table->renameColumn('data_hora_saida', 'data_inicio');
            $table->renameColumn('data_hora_prevista_devolucao', 'data_prevista_devolucao');

            $table->time('hora_inicio');
            $table->time('hora_devolucao');

            $table->renameColumn('data_hora_devolucao', 'data_devolucao');
        });
    }
}
