<?php
namespace Ben\Qcloud\Facades;

use Illuminate\Support\Facades\Facade;
use Ben\Qcloud\Weapp\Weapp;

class WeappFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Weapp::class;
    }
}