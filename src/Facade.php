<?php

namespace NickDeKruijk\Pages;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return PageController::class;
    }
}
