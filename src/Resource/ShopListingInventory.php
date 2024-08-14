<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListingInventory\GetListingInventory;
use Hdecom\EtsySdk\Requests\ShopListingInventory\UpdateListingInventory;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopListingInventory extends Resource
{
    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  bool  $showDeleted  A boolean value for inventory whether to include deleted products and their offerings. Default value is false.
     * @param  string  $includes  An enumerated string that attaches a valid association. Default value is null.
     */
    public function getListingInventory(int $listingId, ?bool $showDeleted, ?string $includes): Response
    {
        return $this->connector->send(new GetListingInventory($listingId, $showDeleted, $includes));
    }

    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function updateListingInventory(int $listingId): Response
    {
        return $this->connector->send(new UpdateListingInventory($listingId));
    }
}
