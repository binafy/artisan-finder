<?php

use Binafy\ArtisanFinder\Commands\FindCommand;
use function Pest\Laravel\artisan;

test('find command work correctly', function () {
    artisan(FindCommand::class)->assertExitCode(0);
});
