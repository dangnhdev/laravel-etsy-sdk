<?php

namespace Hdecom\EtsySdk\Requests\ShopListingProduct;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingProduct
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Open API V3 endpoint to retrieve a ListingProduct by ID.
 */
class GetListingProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/listings/{$this->listingId}/inventory/products/{$this->productId}";
	}


	/**
	 * @param int $listingId The listing to return a ListingProduct for.
	 * @param int $productId The numeric ID for a specific [product](/documentation/reference#tag/ShopListing-Product) purchased from a listing.
	 */
	public function __construct(
		protected int $listingId,
		protected int $productId,
	) {
	}
}
