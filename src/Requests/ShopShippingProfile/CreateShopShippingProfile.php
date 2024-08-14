<?php

namespace Hdecom\EtsySdk\Requests\ShopShippingProfile;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createShopShippingProfile
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Creates a new ShippingProfile. You can pass a country iso code or a region when
 * creating a ShippingProfile, but not both. Only one is required. You must pass either a
 * shipping_carrier_id AND mail_class, or both min and max_delivery_days.
 */
class CreateShopShippingProfile extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/shipping-profiles";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function __construct(
		protected int $shopId,
	) {
	}
}
