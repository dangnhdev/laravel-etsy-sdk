<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopProductionPartner\GetShopProductionPartners;
use Hdecom\EtsySdk\Resource;
use Saloon\Http\Response;

class ShopProductionPartner extends Resource
{
    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     */
    public function getShopProductionPartners(int $shopId): Response
    {
        return $this->connector->send(new GetShopProductionPartners($shopId));
    }
}
