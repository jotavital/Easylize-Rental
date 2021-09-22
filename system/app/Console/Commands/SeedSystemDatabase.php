<?php

namespace App\Console\Commands;

use Database\Seeders\System\SystemDatabaseSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SeedSystemDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:seedSystemDb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will magically seed my system default database';

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
            '--class' => SystemDatabaseSeeder::class,
            '--database' => 'mysql'
        ]);
    }
}
