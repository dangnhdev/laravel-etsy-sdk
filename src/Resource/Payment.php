<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\Payment\GetPaymentAccountLedgerEntryPayments;
use Hdecom\EtsySdk\Requests\Payment\GetPayments;
use Hdecom\EtsySdk\Requests\Payment\GetShopPaymentByReceiptId;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class Payment extends Resource
{
	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param array $ledgerEntryIds
	 */
	public function getPaymentAccountLedgerEntryPayments(int $shopId, array $ledgerEntryIds): Response
	{
		return $this->connector->send(new GetPaymentAccountLedgerEntryPayments($shopId, $ledgerEntryIds));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $receiptId The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.
	 */
	public function getShopPaymentByReceiptId(int $shopId, int $receiptId): Response
	{
		return $this->connector->send(new GetShopPaymentByReceiptId($shopId, $receiptId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param array $paymentIds A comma-separated array of Payment IDs numbers.
	 */
	public function getPayments(int $shopId, array $paymentIds): Response
	{
		return $this->connector->send(new GetPayments($shopId, $paymentIds));
	}
}
