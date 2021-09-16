<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeEmpresaFieldsToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresa', function (Blueprint $table) {
            $stringColumnsToChange = array("nome_empresa", "razao_social", "rua", "bairro", "numero", "cep", "email", "inscricao_estadual", "cnpj", "telefone", "tipo_telefone");
            $intColumnsToChange = array("fk_cidade");

            foreach ($stringColumnsToChange as $column) {
                $table->string($column)->nullable()->change();
            }

            foreach ($intColumnsToChange as $column) {
                $table->integer($column)->nullable()->change();
            }
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nullable', function (Blueprint $table) {
            //
        });
    }
}
