<?php

namespace Hdecom\EtsySdk\Requests\Shop;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShopByOwnerUserId
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves the shop identified by the shop owner's user ID.
 */
class GetShopByOwnerUserId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/users/{$this->userId}/shops";
	}


	/**
	 * @param int $userId The numeric user ID of the [user](/documentation/reference#tag/User) who owns this shop.
	 */
	public function __construct(
		protected int $userId,
	) {
	}
}
