<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListingProduct\GetListingProduct;
use Hdecom\EtsySdk\Resource;
use Saloon\Http\Response;

class ShopListingProduct extends Resource
{
    /**
     * @param  int  $listingId  The listing to return a ListingProduct for.
     * @param  int  $productId  The numeric ID for a specific [product](/documentation/reference#tag/ShopListing-Product) purchased from a listing.
     */
    public function getListingProduct(int $listingId, int $productId): Response
    {
        return $this->connector->send(new GetListingProduct($listingId, $productId));
    }
}
