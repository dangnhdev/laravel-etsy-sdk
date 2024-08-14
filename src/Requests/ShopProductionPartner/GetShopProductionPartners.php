<?php

namespace Hdecom\EtsySdk\Requests\ShopProductionPartner;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShopProductionPartners
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a list of production partners available in the specific Etsy shop
 * identified by its shop ID.
 */
class GetShopProductionPartners extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/production-partners";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function __construct(
		protected int $shopId,
	) {
	}
}
