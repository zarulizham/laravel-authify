<?php

namespace ZarulZubir\Authify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ZarulZubir\Authify\Authify
 */
class Authify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ZarulZubir\Authify\Authify::class;
    }
}
