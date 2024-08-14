<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\User\GetUser;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class User extends Resource
{
    public function getUser(int $userId): Response
    {
        return $this->connector->send(new GetUser($userId));
    }
}
