<?php

namespace Hdecom\EtsySdk\Requests\ShopListingFile;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * uploadListingFile
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Uploads a new file for a digital listing, or associates an existing file with a
 * specific listing. You must either provide the `listing_file_id` of an existing file, or the name and
 * binary file data for a file to upload. Associating an existing file to a physical listing converts
 * the physical listing into a digital listing, which removes all shipping costs and any product and
 * inventory variations.
 */
class UploadListingFile extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}/files";
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
