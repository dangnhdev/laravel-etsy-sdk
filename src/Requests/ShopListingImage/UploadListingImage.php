<?php

namespace Hdecom\EtsySdk\Requests\ShopListingImage;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * uploadListingImage
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Uploads or assigns an image to a listing identified by a shop ID with a listing ID.
 * To upload a new image, set the image file as the value for the `image` parameter. You can assign a
 * previously deleted image to a listing using the deleted image's image ID in the `listing_image_id`
 * parameter. When a request contains both `image` and `listing_image_id` parameter values, the
 * endpoint uploads the image in the `image` parameter only. Note: When uploading a new image, data
 * such as colors and size may return as null values due to asynchronous processing of the image. Use
 * getListingImage endpoint to fetch these values.
 */
class UploadListingImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}/images";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function __construct(
		protected int $shopId,
		protected int $listingId,
	) {
	}
}
