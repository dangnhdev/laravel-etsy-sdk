<?php

namespace Hdecom\EtsySdk\Requests\ShopListing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllListingsActive
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * A list of all active listings on Etsy paginated by their creation date. Without
 * sort_order listings will be returned newest-first by default.
 */
class FindAllListingsActive extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/listings/active";
	}


	/**
	 * @param null|int $limit The maximum number of results to return.
	 * @param null|int $offset The number of records to skip before selecting the first result.
	 * @param null|string $keywords Search term or phrase that must appear in all results.
	 * @param null|string $sortOn The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
	 * @param null|string $sortOrder The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
	 * @param null|float|int $minPrice The minimum price of listings to be returned by a search result.
	 * @param null|float|int $maxPrice The maximum price of listings to be returned by a search result.
	 * @param null|int $taxonomyId The numerical taxonomy ID of the listing. See [SellerTaxonomy](/documentation/reference#tag/SellerTaxonomy) and [BuyerTaxonomy](/documentation/reference#tag/BuyerTaxonomy) for more information.
	 * @param null|string $shopLocation Filters by shop location. If location cannot be parsed, Etsy responds with an error.
	 */
	public function __construct(
		protected ?int $limit = null,
		protected ?int $offset = null,
		protected ?string $keywords = null,
		protected ?string $sortOn = null,
		protected ?string $sortOrder = null,
		protected float|int|null $minPrice = null,
		protected float|int|null $maxPrice = null,
		protected ?int $taxonomyId = null,
		protected ?string $shopLocation = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'limit' => $this->limit,
			'offset' => $this->offset,
			'keywords' => $this->keywords,
			'sort_on' => $this->sortOn,
			'sort_order' => $this->sortOrder,
			'min_price' => $this->minPrice,
			'max_price' => $this->maxPrice,
			'taxonomy_id' => $this->taxonomyId,
			'shop_location' => $this->shopLocation,
		]);
	}
}
