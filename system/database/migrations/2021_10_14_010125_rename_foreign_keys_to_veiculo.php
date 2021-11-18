<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameForeignKeysToVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('veiculo', function (Blueprint $table) {
            $table->renameColumn('fk_marca', 'marca_id');
            $table->renameColumn('fk_modelo', 'modelo_id');
            $table->renameColumn('fk_categoria', 'categoria_id');
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
            $table->renameColumn('marca_id', 'fk_marca');
            $table->renameColumn('modelo_id', 'fk_modelo');
            $table->renameColumn('categoria_id', 'fk_categoria');
        });
    }
}
