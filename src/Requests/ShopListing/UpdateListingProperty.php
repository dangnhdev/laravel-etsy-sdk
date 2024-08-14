<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListing;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateListingProperty
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Updates or populates the properties list defining product offerings for a listing.
 * Each offering requires both a `value` and a `value_id` that are valid for a `scale_id` assigned to
 * the listing or that you assign to the listing with this request.
 */
class UpdateListingProperty extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}/properties/{$this->propertyId}";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $propertyId  The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties).
     */
    public function __construct(
        protected int $shopId,
        protected int $listingId,
        protected int $propertyId,
    ) {}
}
