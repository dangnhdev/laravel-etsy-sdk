<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopShippingProfile;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateShopShippingProfile
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Changes the settings in a shipping profile. You can pass a country iso code or a
 * region when updating a ShippingProfile, but not both. Only one is required. You must pass either a
 * shipping_carrier_id AND mail_class, or both min and max_delivery_days.
 */
class UpdateShopShippingProfile extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/shipping-profiles/{$this->shippingProfileId}";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $shippingProfileId  The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
     */
    public function __construct(
        protected int $shopId,
        protected int $shippingProfileId,
    ) {}
}
