<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Commands;

use Illuminate\Console\Command;

class EtsySdkCommand extends Command
{
    public $signature = 'laravel-etsy-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
