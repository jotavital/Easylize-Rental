<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTipoVeiculoFieldToFkCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categoria', function (Blueprint $table) {
            $table->integer('tipo_categoria')->index('fk_tipo_categoria')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fk_categoria', function (Blueprint $table) {
            //
        });
    }
}
