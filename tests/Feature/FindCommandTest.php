<?php

use Binafy\ArtisanFinder\Commands\FindCommand;
use Laravel\Prompts\Key;
use Laravel\Prompts\Prompt;
use function Pest\Laravel\artisan;

test('find command work correctly', function () {
    Prompt::fake(['u', 'e', Key::DOWN, Key::ENTER]);

    artisan(FindCommand::class)
        ->expectsQuestion('Search for a command', 'event:clear')
        ->assertExitCode(0);
});
