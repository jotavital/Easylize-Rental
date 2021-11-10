<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNomeTipoColumnToTipoCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipo_categoria', function (Blueprint $table) {
            $table->renameColumn('nome_tipo', 'nome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipo_categoria', function (Blueprint $table) {
            $table->renameColumn('nome', 'nome_tipo');
        });
    }
}
