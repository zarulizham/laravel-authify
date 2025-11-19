<?php

namespace ZarulZubir\Authify\Commands;

use Illuminate\Console\Command;

class AuthifyCommand extends Command
{
    public $signature = 'laravel-authify';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
