<?php

namespace Sfolador\LaravelEloquentToggle\Commands;

use Illuminate\Console\Command;

class LaravelEloquentToggleCommand extends Command
{
    public $signature = 'laravel-eloquent-toggle';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
