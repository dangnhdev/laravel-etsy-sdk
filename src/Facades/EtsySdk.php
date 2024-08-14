<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hdecom\EtsySdk\EtsySdk
 */
class EtsySdk extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Hdecom\EtsySdk\EtsySdk::class;
    }
}
