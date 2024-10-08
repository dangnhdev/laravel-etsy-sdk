<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\Other\Ping;
use Hdecom\EtsySdk\Requests\Other\TokenScopes;
use Hdecom\EtsySdk\Resource;
use Saloon\Http\Response;

class Other extends Resource
{
    public function ping(): Response
    {
        return $this->connector->send(new Ping);
    }

    public function tokenScopes(): Response
    {
        return $this->connector->send(new TokenScopes);
    }
}
