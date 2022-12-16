<?php

namespace B4mtech\LaravelBaseEnvoy\Commands;

use Illuminate\Console\Command;

class LaravelBaseEnvoyCommand extends Command
{
    public $signature = 'laravel-base-envoy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
