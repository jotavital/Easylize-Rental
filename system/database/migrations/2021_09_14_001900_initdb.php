<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class Initdb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // !! importa o SQL para o banco de dados do tenant
        
        // $sql = file_get_contents(base_path() . "/database/sql/easylize_rental_db.sql");

        // $databaseName = Config::get('database.connections.tenant.database');

        // $sql = str_replace("easylize_rental", $databaseName, $sql);
        
        // DB::unprepared($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
