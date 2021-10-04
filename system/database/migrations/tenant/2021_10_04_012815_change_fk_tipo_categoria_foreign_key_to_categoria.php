<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFkTipoCategoriaForeignKeyToCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categoria', function (Blueprint $table) {
            $table->foreignId('fk_tipo_categoria')->change()->constrained('tipo_categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categoria', function (Blueprint $table) {
            //
        });
    }
}
