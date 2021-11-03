<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateTenantDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:createTenantDb {tenantDatabaseName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates the initial tenant database';

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
        $tenantDatabaseName = $this->argument('tenantDatabaseName');
        DB::statement("CREATE DATABASE IF NOT EXISTS " . $tenantDatabaseName);
    }
}
