<?php

namespace App\Console\Commands;

use Database\Seeders\SeedOnce as SeedersSeedOnce;
use Illuminate\Console\Command;

class SeedOnce extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:seedOnce';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The seeders that may be runned only one time';

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
        $this->call(SeedersSeedOnce::class);
    }
}
