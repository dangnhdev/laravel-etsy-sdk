<?php

namespace Hdecom\EtsySdk\Requests\ShopSection;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShopSection
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a shop section, referenced by section ID and shop ID.
 */
class GetShopSection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/sections/{$this->shopSectionId}";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shopSectionId The numeric ID of a section in a specific Etsy shop.
	 */
	public function __construct(
		protected int $shopId,
		protected int $shopSectionId,
	) {
	}
}
