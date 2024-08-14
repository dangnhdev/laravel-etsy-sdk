<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\LedgerEntry\GetShopPaymentAccountLedgerEntries;
use Hdecom\EtsySdk\Requests\LedgerEntry\GetShopPaymentAccountLedgerEntry;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class LedgerEntry extends Resource
{
	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $ledgerEntryId The unique ID of the shop owner ledger entry.
	 */
	public function getShopPaymentAccountLedgerEntry(int $shopId, int $ledgerEntryId): Response
	{
		return $this->connector->send(new GetShopPaymentAccountLedgerEntry($shopId, $ledgerEntryId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $minCreated The earliest unix timestamp for when a record was created.
	 * @param int $maxCreated The latest unix timestamp for when a record was created.
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 */
	public function getShopPaymentAccountLedgerEntries(
		int $shopId,
		int $minCreated,
		int $maxCreated,
		?int $limit,
		?int $offset,
	): Response
	{
		return $this->connector->send(new GetShopPaymentAccountLedgerEntries($shopId, $minCreated, $maxCreated, $limit, $offset));
	}
}
