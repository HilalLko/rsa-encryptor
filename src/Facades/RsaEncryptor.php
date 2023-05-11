<?php

namespace Hilal\RsaEncryptor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hilal\RsaEncryptor\RsaEncryptor
 */
class RsaEncryptor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Hilal\RsaEncryptor\RsaEncryptor::class;
    }
}
