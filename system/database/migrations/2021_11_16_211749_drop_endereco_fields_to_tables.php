<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropEnderecoFieldsToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente', function (Blueprint $table) {
            $table->dropColumn('rua');
            $table->dropColumn('bairro');
            $table->dropColumn('numero');
            $table->dropColumn('cep');
            $table->dropColumn('cidade');
        });
        Schema::table('empresa', function (Blueprint $table) {
            $table->dropColumn('rua');
            $table->dropColumn('bairro');
            $table->dropColumn('numero');
            $table->dropColumn('cep');
            $table->dropColumn('cidade');
        });
        Schema::table('funcionario', function (Blueprint $table) {
            $table->dropColumn('rua');
            $table->dropColumn('bairro');
            $table->dropColumn('numero');
            $table->dropColumn('cep');
            $table->dropColumn('cidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
}
