<?php

namespace Binafy\ArtisanFinder\Providers;

use Illuminate\Support\ServiceProvider;
use Binafy\ArtisanFinder\Commands\FindCommand;

class ArtisanFinderServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->commands(FindCommand::class);
    }
}
