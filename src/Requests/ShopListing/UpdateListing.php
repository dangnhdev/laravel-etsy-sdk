<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListing;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateListing
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Updates a listing, identified by a listing ID, for a specific shop identified by a
 * shop ID. Note that this is a PATCH method type. When activating, or manually renewing a physical
 * listing, the shipping profile referenced by the `shipping_profile_id`, and all of its fields, along
 * with its entries and upgrades must be complete and valid. If the shipping profile is not complete
 * and valid, we will throw an exception with an error message that guides the request sender to update
 * whatever data is bad.
 */
class UpdateListing extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function __construct(
        protected int $shopId,
        protected int $listingId,
    ) {}
}
