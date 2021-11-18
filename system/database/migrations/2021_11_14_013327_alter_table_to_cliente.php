<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableToCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente', function (Blueprint $table) {
            $table->string('sexo')->change();
            $table->renameColumn('data_nasc', 'data_nascimento');
            $table->renameColumn('fk_cidade', 'cidade_id');
            $table->dropColumn('data_cadastro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente', function (Blueprint $table) {
            $table->string('sexo')->change();
            $table->renameColumn('data_nascimento', 'data_nasc');
            $table->renameColumn('cidade_id', 'fk_cidade');
            $table->date('data_cadastro');
        });
    }
}
