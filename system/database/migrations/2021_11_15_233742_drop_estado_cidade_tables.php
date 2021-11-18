<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DropEstadoCidadeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliente', function (Blueprint $table) {
            $table->dropForeign('fk_cidade_cliente');
            $table->dropColumn('cidade_id');
            $table->string('cidade')->after('cep');
        });
        Schema::table('funcionario', function (Blueprint $table) {
            $table->dropForeign('fk_cidade_funcionario');
            $table->dropColumn('fk_cidade');
            $table->string('cidade')->after('cep');
        });
        Schema::table('empresa', function (Blueprint $table) {
            $table->dropForeign('fk_cidade_empresa');
            $table->dropColumn('cidade_id');
            $table->string('cidade')->after('cep');
        });
        Schema::table('cidade', function (Blueprint $table) {
            $table->dropForeign('fk_estado_cidade');
            $table->dropColumn('uf');
        });
        Schema::dropIfExists('estado');
        Schema::dropIfExists('cidade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliente', function (Blueprint $table) {
            // $table->dropForeign('fk_cidade_cliente');
            $table->integer('cidade_id');
            $table->dropColumn('cidade');
        });
        Schema::table('funcionario', function (Blueprint $table) {
            // $table->dropForeign('fk_cidade_funcionario');
            $table->integer('fk_cidade');
            $table->dropColumn('cidade');
        });
        Schema::table('empresa', function (Blueprint $table) {
            // $table->dropForeign('fk_cidade_empresa');
            $table->integer('cidade_id');
            $table->dropColumn('cidade');
        });

        Schema::create('estado', function (Blueprint $table) {
            $table->integer('id', true);
            $table->timestamps();
            $table->softDeletes();
            
            $table->engine = 'InnoDB';
        });
        Schema::create('cidade', function (Blueprint $table) {
            $table->integer('id', true);
            $table->timestamps();
            $table->softDeletes();
            
            $table->engine = 'InnoDB';
        });
    }
}
