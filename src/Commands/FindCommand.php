<?php

namespace Binafy\ArtisanFinder\Commands;

use Illuminate\Console\Command;

class FindCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'find:art';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find artisan command with given string';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
