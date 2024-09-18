<?php

use Binafy\ArtisanFinder\Commands\FindCommand;
use function Pest\Laravel\artisan;

test('find command work correctly', function () {
    artisan(FindCommand::class)
        ->expectsQuestion('Search for a command', 'event:clear')
        ->assertExitCode(0);
});
