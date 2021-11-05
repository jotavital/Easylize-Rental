<?php

namespace App\Console\Commands;

use Database\Seeders\TenantDbSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SeedTenantDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:seedTenantDb {tenantDbName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeds the tenant DB';

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
        $tenantDbName = $this->argument('tenantDbName');
        $tenantDbSeeder = new TenantDbSeeder();
        $tenantDbSeeder->run($tenantDbName);
    }
}
