<?php

declare(strict_types=1);

use Hdecom\EtsySdk\Facades\EtsySdk;

test('', function () {
    $result = EtsySdk::shop()->findShops('purrink', null, null);
    dd($result);
});
