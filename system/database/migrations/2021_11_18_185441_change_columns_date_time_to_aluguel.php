<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsDateTimeToAluguel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aluguel', function (Blueprint $table) {
            $table->dateTime('data_hora_saida')->change();
            $table->dateTime('data_hora_prevista_devolucao')->change();
            $table->dateTime('data_hora_devolucao')->change();
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
            $table->time('data_hora_saida')->change();
            $table->time('data_hora_prevista_devolucao')->change();
            $table->time('data_hora_devolucao')->change();
        });
    }
}
