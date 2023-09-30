<?php

namespace Rupadana\FilamentNetworkGraph\Commands;

use Illuminate\Console\Command;

class FilamentNetworkGraphCommand extends Command
{
    public $signature = 'filament-network-graph';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
