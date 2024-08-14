<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopReceiptTransactions\GetShopReceiptTransaction;
use Hdecom\EtsySdk\Requests\ShopReceiptTransactions\GetShopReceiptTransactionsByListing;
use Hdecom\EtsySdk\Requests\ShopReceiptTransactions\GetShopReceiptTransactionsByReceipt;
use Hdecom\EtsySdk\Requests\ShopReceiptTransactions\GetShopReceiptTransactionsByShop;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopReceiptTransactions extends Resource
{
    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $limit  The maximum number of results to return.
     * @param  int  $offset  The number of records to skip before selecting the first result.
     */
    public function getShopReceiptTransactionsByListing(int $shopId, int $listingId, ?int $limit, ?int $offset): Response
    {
        return $this->connector->send(new GetShopReceiptTransactionsByListing($shopId, $listingId, $limit, $offset));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $receiptId  The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.
     */
    public function getShopReceiptTransactionsByReceipt(int $shopId, int $receiptId): Response
    {
        return $this->connector->send(new GetShopReceiptTransactionsByReceipt($shopId, $receiptId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $transactionId  The unique numeric ID for a transaction.
     */
    public function getShopReceiptTransaction(int $shopId, int $transactionId): Response
    {
        return $this->connector->send(new GetShopReceiptTransaction($shopId, $transactionId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $limit  The maximum number of results to return.
     * @param  int  $offset  The number of records to skip before selecting the first result.
     */
    public function getShopReceiptTransactionsByShop(int $shopId, ?int $limit, ?int $offset): Response
    {
        return $this->connector->send(new GetShopReceiptTransactionsByShop($shopId, $limit, $offset));
    }
}
