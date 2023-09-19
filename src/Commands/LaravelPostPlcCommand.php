<?php

namespace AlexanderPoellmann\LaravelPostPlc\Commands;

use Illuminate\Console\Command;

class LaravelPostPlcCommand extends Command
{
    public $signature = 'laravel-post-plc';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
