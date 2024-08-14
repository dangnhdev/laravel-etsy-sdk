<?php

namespace Hdecom\EtsySdk\Requests\ShopListing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingsByShopSectionId
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves all the listings from the section of a specific shop.
 */
class GetListingsByShopSectionId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/shop-sections/listings";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param array $shopSectionIds A list of numeric IDS for all sections in a specific Etsy shop.
	 * @param null|int $limit The maximum number of results to return.
	 * @param null|int $offset The number of records to skip before selecting the first result.
	 * @param null|string $sortOn The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
	 * @param null|string $sortOrder The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
	 */
	public function __construct(
		protected int $shopId,
		protected array $shopSectionIds,
		protected ?int $limit = null,
		protected ?int $offset = null,
		protected ?string $sortOn = null,
		protected ?string $sortOrder = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'shop_section_ids' => $this->shopSectionIds,
			'limit' => $this->limit,
			'offset' => $this->offset,
			'sort_on' => $this->sortOn,
			'sort_order' => $this->sortOrder,
		]);
	}
}
