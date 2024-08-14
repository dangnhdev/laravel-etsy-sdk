<?php

namespace Hdecom\EtsySdk\Requests\ShopListingVideo;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingVideo
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a single video associated with the given listing. Requesting a video from
 * a listing returns an empty result.
 */
class GetListingVideo extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/listings/{$this->listingId}/videos/{$this->videoId}";
	}


	/**
	 * @param int $videoId The unique ID of a video associated with a listing.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function __construct(
		protected int $videoId,
		protected int $listingId,
	) {
	}
}
