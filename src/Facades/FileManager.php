<?php

namespace Prakort\FileManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Prakort\FileManager\FileManager
 */
class FileManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Prakort\FileManager\FileManager::class;
    }
}
