<?php

namespace Hdecom\EtsySdk\Requests\ShopListingFile;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllListingFiles
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves all the files associated with the given digital listing. Requesting files
 * from a physical listing returns an empty result.
 */
class GetAllListingFiles extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}/files";
	}


	/**
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function __construct(
		protected int $listingId,
		protected int $shopId,
	) {
	}
}
