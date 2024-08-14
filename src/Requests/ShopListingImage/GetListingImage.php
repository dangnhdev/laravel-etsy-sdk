<?php

namespace Hdecom\EtsySdk\Requests\ShopListingImage;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingImage
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves the references and metadata for a listing image with a specific image ID.
 */
class GetListingImage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/listings/{$this->listingId}/images/{$this->listingImageId}";
	}


	/**
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 * @param int $listingImageId The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction.
	 */
	public function __construct(
		protected int $listingId,
		protected int $listingImageId,
	) {
	}
}
