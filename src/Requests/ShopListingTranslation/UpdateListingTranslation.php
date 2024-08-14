<?php

namespace Hdecom\EtsySdk\Requests\ShopListingTranslation;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateListingTranslation
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Updates a ListingTranslation by listing_id and language
 */
class UpdateListingTranslation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}/translations/{$this->language}";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 * @param string $language The IETF language tag for the language of this translation. Ex: `de`, `en`, `es`, `fr`, `it`, `ja`, `nl`, `pl`, `pt`.
	 */
	public function __construct(
		protected int $shopId,
		protected int $listingId,
		protected string $language,
	) {
	}
}
