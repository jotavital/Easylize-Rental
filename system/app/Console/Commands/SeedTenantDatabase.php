<?php

namespace App\Console\Commands;

use Database\Seeders\Tenant\TenantDatabaseSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SeedTenantDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:seedTenantDb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will magically seed my tenants database';

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
        Artisan::call('db:seed', [
            '--class' => TenantDatabaseSeeder::class,
            '--database' => 'tenant'
        ]);
    }
}