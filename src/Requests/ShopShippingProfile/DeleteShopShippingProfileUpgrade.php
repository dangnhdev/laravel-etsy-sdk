<?php

namespace Hdecom\EtsySdk\Requests\ShopShippingProfile;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteShopShippingProfileUpgrade
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Deletes a shipping profile upgrade and removes the upgrade option from every listing
 * that uses the associated shipping profile.
 */
class DeleteShopShippingProfileUpgrade extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/shipping-profiles/{$this->shippingProfileId}/upgrades/{$this->upgradeId}";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the shipping profile.
	 * @param int $upgradeId The numeric ID that is associated with a shipping upgrade
	 */
	public function __construct(
		protected int $shopId,
		protected int $shippingProfileId,
		protected int $upgradeId,
	) {
	}
}
