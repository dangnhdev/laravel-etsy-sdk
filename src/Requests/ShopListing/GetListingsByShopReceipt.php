<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListing;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingsByShopReceipt
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Gets all listings associated with a receipt.
 */
class GetListingsByShopReceipt extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/receipts/{$this->receiptId}/listings";
    }

    /**
     * @param  int  $receiptId  The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  null|int  $limit  The maximum number of results to return.
     * @param  null|int  $offset  The number of records to skip before selecting the first result.
     */
    public function __construct(
        protected int $receiptId,
        protected int $shopId,
        protected ?int $limit = null,
        protected ?int $offset = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit, 'offset' => $this->offset]);
    }
}
