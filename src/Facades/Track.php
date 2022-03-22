<?php

namespace Puppyter\Tracker\Facades;

use Illuminate\Support\Facades\Facade;

class Track extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'track';
    }
}
