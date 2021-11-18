<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdatedAtFieldMarcaVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marca_veiculo', function (Blueprint $table){
            $table->dateTime('updated_at')->after('nome');
            $table->dateTime('created_at')->after('nome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marca_veiculo', function (Blueprint $table){
            $table->dropColumn('updated_at');
            $table->dropColumn('created_at');
        });
    }
}
