<?php

declare(strict_types=1);

use Hdecom\EtsySdk\Rector\AddDefaultNullToNullableParamsRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(AddDefaultNullToNullableParamsRector::class);

    // Define the paths to process
    $rectorConfig->paths([
        __DIR__.'/src',
    ]);
};
