<?php

namespace Hdecom\EtsySdk\Requests\ShopListingVideo;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingVideos
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves all listing video resources for a listing with a specific listing ID.
 */
class GetListingVideos extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/listings/{$this->listingId}/videos";
	}


	/**
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function __construct(
		protected int $listingId,
	) {
	}
}
