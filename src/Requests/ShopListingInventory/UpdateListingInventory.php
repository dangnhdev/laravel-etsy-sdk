<?php

namespace Hdecom\EtsySdk\Requests\ShopListingInventory;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateListingInventory
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Updates the inventory for a listing identified by a listing ID. The update fails if
 * the supplied values for product sku, offering quantity, and/or price are incompatible with values in
 * `*_on_property_*` fields. When setting a price, assign a float equal to amount divided by divisor as
 * specified in the Money resource.
 */
class UpdateListingInventory extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/v3/application/listings/{$this->listingId}/inventory";
	}


	/**
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function __construct(
		protected int $listingId,
	) {
	}
}
