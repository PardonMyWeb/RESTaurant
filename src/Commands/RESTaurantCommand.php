<?php

namespace PardonMyWeb\RESTaurant\Commands;

use Illuminate\Console\Command;

class RESTaurantCommand extends Command
{
    public $signature = 'restaurant';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
