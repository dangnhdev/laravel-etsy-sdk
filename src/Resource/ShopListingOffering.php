<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListingOffering\GetListingOffering;
use Hdecom\EtsySdk\Resource;
use Saloon\Http\Response;

class ShopListingOffering extends Resource
{
    public function getListingOffering(int $listingId, int $productId, int $productOfferingId): Response
    {
        return $this->connector->send(new GetListingOffering($listingId, $productId, $productOfferingId));
    }
}
