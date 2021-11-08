<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SeedMainDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:seedMain';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import SQL of the main db';

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
        $sql = file_get_contents(base_path() . "/database/sql/" . $_ENV['DB_DATABASE'] . ".sql");
        DB::unprepared($sql);
    }
}
