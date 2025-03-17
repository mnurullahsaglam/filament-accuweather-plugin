<?php

namespace NurullahSaglam\FilamentAccuweatherPlugin\Commands;

use Illuminate\Console\Command;

class FilamentAccuweatherPluginCommand extends Command
{
    public $signature = 'filament-accuweather-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
