<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\Shop\FindShops;
use Hdecom\EtsySdk\Requests\Shop\GetShop;
use Hdecom\EtsySdk\Requests\Shop\GetShopByOwnerUserId;
use Hdecom\EtsySdk\Requests\Shop\UpdateShop;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class Shop extends Resource
{
    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     */
    public function getShop(int $shopId): Response
    {
        return $this->connector->send(new GetShop($shopId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     */
    public function updateShop(int $shopId): Response
    {
        return $this->connector->send(new UpdateShop($shopId));
    }

    /**
     * @param  int  $userId  The numeric user ID of the [user](/documentation/reference#tag/User) who owns this shop.
     */
    public function getShopByOwnerUserId(int $userId): Response
    {
        return $this->connector->send(new GetShopByOwnerUserId($userId));
    }

    /**
     * @param  string  $shopName  The shop's name string.
     * @param  int  $limit  The maximum number of results to return.
     * @param  int  $offset  The number of records to skip before selecting the first result.
     */
    public function findShops(string $shopName, ?int $limit, ?int $offset): Response
    {
        return $this->connector->send(new FindShops($shopName, $limit, $offset));
    }
}
