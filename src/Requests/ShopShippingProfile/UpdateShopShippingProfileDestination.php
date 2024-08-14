<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopShippingProfile;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateShopShippingProfileDestination
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Updates an existing shipping destination, which can set or reassign the shipping
 * cost, carrier, and class for a destination.
 */
class UpdateShopShippingProfileDestination extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/shipping-profiles/{$this->shippingProfileId}/destinations/{$this->shippingProfileDestinationId}";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $shippingProfileId  The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
     * @param  int  $shippingProfileDestinationId  The numeric ID of the shipping profile destination in the [shipping profile](/documentation/reference#tag/Shop-ShippingProfile) associated with the listing.
     */
    public function __construct(
        protected int $shopId,
        protected int $shippingProfileId,
        protected int $shippingProfileDestinationId,
    ) {}
}
