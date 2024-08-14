<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListing;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllActiveListingsByShop
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a list of all active listings on Etsy in a specific shop, paginated by
 * listing creation date.
 */
class FindAllActiveListingsByShop extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/listings/active";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  null|int  $limit  The maximum number of results to return.
     * @param  null|string  $sortOn  The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
     * @param  null|string  $sortOrder  The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
     * @param  null|int  $offset  The number of records to skip before selecting the first result.
     * @param  null|string  $keywords  Search term or phrase that must appear in all results.
     */
    public function __construct(
        protected int $shopId,
        protected ?int $limit = null,
        protected ?string $sortOn = null,
        protected ?string $sortOrder = null,
        protected ?int $offset = null,
        protected ?string $keywords = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'sort_on' => $this->sortOn,
            'sort_order' => $this->sortOrder,
            'offset' => $this->offset,
            'keywords' => $this->keywords,
        ]);
    }
}
