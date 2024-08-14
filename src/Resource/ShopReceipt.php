<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopReceipt\CreateReceiptShipment;
use Hdecom\EtsySdk\Requests\ShopReceipt\GetShopReceipt;
use Hdecom\EtsySdk\Requests\ShopReceipt\GetShopReceipts;
use Hdecom\EtsySdk\Requests\ShopReceipt\UpdateShopReceipt;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopReceipt extends Resource
{
    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $receiptId  The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.
     */
    public function getShopReceipt(int $shopId, int $receiptId): Response
    {
        return $this->connector->send(new GetShopReceipt($shopId, $receiptId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $receiptId  The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.
     */
    public function updateShopReceipt(int $shopId, int $receiptId): Response
    {
        return $this->connector->send(new UpdateShopReceipt($shopId, $receiptId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $minCreated  The earliest unix timestamp for when a record was created.
     * @param  int  $maxCreated  The latest unix timestamp for when a record was created.
     * @param  int  $minLastModified  The earliest unix timestamp for when a record last changed.
     * @param  int  $maxLastModified  The latest unix timestamp for when a record last changed.
     * @param  int  $limit  The maximum number of results to return.
     * @param  int  $offset  The number of records to skip before selecting the first result.
     * @param  string  $sortOn  The value to sort a search result of listings on.
     * @param  string  $sortOrder  The ascending(up) or descending(down) order to sort receipts by.
     * @param  bool  $wasPaid  When `true`, returns receipts where the seller has recieved payment for the receipt. When `false`, returns receipts where payment has not been received.
     * @param  bool  $wasShipped  When `true`, returns receipts where the seller shipped the product(s) in this receipt. When `false`, returns receipts where shipment has not been set.
     * @param  bool  $wasDelivered  When `true`, returns receipts that have been marked as delivered. When `false`, returns receipts where shipment has not been marked as delivered.
     * @param  bool  $wasCanceled  When `true`, the endpoint will only return the canceled receipts. When `false`, the endpoint will only return non-canceled receipts.
     */
    public function getShopReceipts(
        int $shopId,
        ?int $minCreated,
        ?int $maxCreated,
        ?int $minLastModified,
        ?int $maxLastModified,
        ?int $limit,
        ?int $offset,
        ?string $sortOn,
        ?string $sortOrder,
        ?bool $wasPaid,
        ?bool $wasShipped,
        ?bool $wasDelivered,
        ?bool $wasCanceled,
    ): Response {
        return $this->connector->send(new GetShopReceipts($shopId, $minCreated, $maxCreated, $minLastModified, $maxLastModified, $limit, $offset, $sortOn, $sortOrder, $wasPaid, $wasShipped, $wasDelivered, $wasCanceled));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $receiptId  The receipt to submit tracking for.
     */
    public function createReceiptShipment(int $shopId, int $receiptId): Response
    {
        return $this->connector->send(new CreateReceiptShipment($shopId, $receiptId));
    }
}
