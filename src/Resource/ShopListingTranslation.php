<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListingTranslation\CreateListingTranslation;
use Hdecom\EtsySdk\Requests\ShopListingTranslation\GetListingTranslation;
use Hdecom\EtsySdk\Requests\ShopListingTranslation\UpdateListingTranslation;
use Hdecom\EtsySdk\Resource;
use Saloon\Http\Response;

class ShopListingTranslation extends Resource
{
    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  string  $language  The IETF language tag for the language of this translation. Ex: `de`, `en`, `es`, `fr`, `it`, `ja`, `nl`, `pl`, `pt`.
     */
    public function getListingTranslation(int $shopId, int $listingId, string $language): Response
    {
        return $this->connector->send(new GetListingTranslation($shopId, $listingId, $language));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  string  $language  The IETF language tag for the language of this translation. Ex: `de`, `en`, `es`, `fr`, `it`, `ja`, `nl`, `pl`, `pt`.
     */
    public function updateListingTranslation(int $shopId, int $listingId, string $language): Response
    {
        return $this->connector->send(new UpdateListingTranslation($shopId, $listingId, $language));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  string  $language  The IETF language tag for the language of this translation. Ex: `de`, `en`, `es`, `fr`, `it`, `ja`, `nl`, `pl`, `pt`.
     */
    public function createListingTranslation(int $shopId, int $listingId, string $language): Response
    {
        return $this->connector->send(new CreateListingTranslation($shopId, $listingId, $language));
    }
}
