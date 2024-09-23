<?php

namespace Binafy\ArtisanFinder\Commands;

use Illuminate\Console\Command;

use function Laravel\Prompts\suggest;
use function Laravel\Prompts\text;

class FindCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'find:art {args?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find artisan command with given name';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $commands = collect(array_keys($this->getApplication()->all()))
            ->filter(fn (string $command) => $command !== $this->signature)
            ->values();

        $command = suggest(
            'Search for a command',
            options: $commands->toArray(),
            required: true,
            hint: 'Type parts of a command name to search for'
        );

        $args = [];

        if ($this->argument('args')) {
            $args = text(
                label: 'Write arguments:',
                placeholder: 'E.g. Milwad',
                hint: 'This will be sent as command arguments'
            );
            $args = explode(' ', $args);
        }

        $this->call($command, $args);

        return 0;
    }
}
