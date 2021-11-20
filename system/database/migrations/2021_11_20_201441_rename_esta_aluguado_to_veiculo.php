<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameEstaAluguadoToVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('veiculo', function (Blueprint $table) {
            $table->renameColumn('esta_alugado', 'status_veiculo_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('veiculo', function (Blueprint $table) {
            $table->renameColumn('status_veiculo_id', 'esta_alugado');
        });
    }
}
