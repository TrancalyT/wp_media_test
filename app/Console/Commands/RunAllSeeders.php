<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunAllSeeders extends Command
{
    protected $signature = 'db:seed:all';
    protected $description = 'Run all seeders';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->call('db:seed', ['--class' => 'NewsSeeder']);
        $this->call('db:seed', ['--class' => 'TourSeeder']);
        $this->call('db:seed', ['--class' => 'AlbumsSeeder']);

        $this->info('All seeders have been run.');
    }
}

