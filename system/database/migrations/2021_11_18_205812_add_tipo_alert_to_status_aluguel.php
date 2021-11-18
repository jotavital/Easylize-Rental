<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoAlertToStatusAluguel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('status_aluguel', function (Blueprint $table) {
            $table->string('tipo_alert')->nullable()->after('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('status_aluguel', function (Blueprint $table) {
            $table->dropColumn('tipo_alert');
        });
    }
}
