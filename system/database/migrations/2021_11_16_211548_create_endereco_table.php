<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('rua');
            $table->string('bairro');
            $table->string('numero');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('sigla_estado');
            $table->timestamps();
            $table->softDeletes();
            
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
