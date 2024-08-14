<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopReceipt;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShopReceipts
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Requests the Shop Receipts from a specific Shop, unfiltered or filtered by receipt
 * id range or offset, date, paid, and/or shipped purchases. **NOTE** Access to ShopReceipt's
 * first_line, second_line, city, state, zip, country_iso and formatted_address is contingent in some
 * regions to a preferred partnership status with Etsy
 */
class GetShopReceipts extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/receipts";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  null|int  $minCreated  The earliest unix timestamp for when a record was created.
     * @param  null|int  $maxCreated  The latest unix timestamp for when a record was created.
     * @param  null|int  $minLastModified  The earliest unix timestamp for when a record last changed.
     * @param  null|int  $maxLastModified  The latest unix timestamp for when a record last changed.
     * @param  null|int  $limit  The maximum number of results to return.
     * @param  null|int  $offset  The number of records to skip before selecting the first result.
     * @param  null|string  $sortOn  The value to sort a search result of listings on.
     * @param  null|string  $sortOrder  The ascending(up) or descending(down) order to sort receipts by.
     * @param  null|bool  $wasPaid  When `true`, returns receipts where the seller has recieved payment for the receipt. When `false`, returns receipts where payment has not been received.
     * @param  null|bool  $wasShipped  When `true`, returns receipts where the seller shipped the product(s) in this receipt. When `false`, returns receipts where shipment has not been set.
     * @param  null|bool  $wasDelivered  When `true`, returns receipts that have been marked as delivered. When `false`, returns receipts where shipment has not been marked as delivered.
     * @param  null|bool  $wasCanceled  When `true`, the endpoint will only return the canceled receipts. When `false`, the endpoint will only return non-canceled receipts.
     */
    public function __construct(
        protected int $shopId,
        protected ?int $minCreated = null,
        protected ?int $maxCreated = null,
        protected ?int $minLastModified = null,
        protected ?int $maxLastModified = null,
        protected ?int $limit = null,
        protected ?int $offset = null,
        protected ?string $sortOn = null,
        protected ?string $sortOrder = null,
        protected ?bool $wasPaid = null,
        protected ?bool $wasShipped = null,
        protected ?bool $wasDelivered = null,
        protected ?bool $wasCanceled = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'min_created' => $this->minCreated,
            'max_created' => $this->maxCreated,
            'min_last_modified' => $this->minLastModified,
            'max_last_modified' => $this->maxLastModified,
            'limit' => $this->limit,
            'offset' => $this->offset,
            'sort_on' => $this->sortOn,
            'sort_order' => $this->sortOrder,
            'was_paid' => $this->wasPaid,
            'was_shipped' => $this->wasShipped,
            'was_delivered' => $this->wasDelivered,
            'was_canceled' => $this->wasCanceled,
        ]);
    }
}
