<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateSystemDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:createSystemDb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates the initial system database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::statement("CREATE DATABASE IF NOT EXISTS easylize_rental");

        DB::purge('mysql');
        
        config(["database.connections.mysql" => [
            "driver" => "mysql",
            "host" => $_ENV['DB_HOST'],
            "port" => $_ENV['DB_PORT'],
            "database" => "easylize_rental",
            "username" => $_ENV['DB_USERNAME'],
            "password" => $_ENV['DB_PASSWORD'],
            "charset" => "utf8",
            "collation" => "utf8_unicode_ci",
            "prefix" => "",
            "strict" => true,
            "engine" => null
        ]]);
    }
}
