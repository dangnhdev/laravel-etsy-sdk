<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopReceiptTransactions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShopReceiptTransactionsByListing
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves the list of transactions associated with a listing.
 */
class GetShopReceiptTransactionsByListing extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}/transactions";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  null|int  $limit  The maximum number of results to return.
     * @param  null|int  $offset  The number of records to skip before selecting the first result.
     */
    public function __construct(
        protected int $shopId,
        protected int $listingId,
        protected ?int $limit = null,
        protected ?int $offset = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit, 'offset' => $this->offset]);
    }
}
