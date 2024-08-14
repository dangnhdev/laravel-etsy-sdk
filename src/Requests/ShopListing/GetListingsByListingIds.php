<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListing;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingsByListingIds
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Allows to query multiple listing ids at once. Limit 100 ids maximum per query.
 */
class GetListingsByListingIds extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v3/application/listings/batch';
    }

    /**
     * @param  array  $listingIds  The list of numeric IDS for the listings in a specific Etsy shop.
     * @param  null|array  $includes  An enumerated string that attaches a valid association. Acceptable inputs are 'Shipping', 'Shop', 'Images', 'User', 'Translations' and 'Inventory'.
     */
    public function __construct(
        protected array $listingIds,
        protected ?array $includes = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['listing_ids' => $this->listingIds, 'includes' => $this->includes]);
    }
}
