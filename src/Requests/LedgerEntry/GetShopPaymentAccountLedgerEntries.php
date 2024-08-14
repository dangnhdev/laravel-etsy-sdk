<?php

namespace Hdecom\EtsySdk\Requests\LedgerEntry;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShopPaymentAccountLedgerEntries
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Get a Shop Payment Account Ledger's Entries
 */
class GetShopPaymentAccountLedgerEntries extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/payment-account/ledger-entries";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $minCreated The earliest unix timestamp for when a record was created.
	 * @param int $maxCreated The latest unix timestamp for when a record was created.
	 * @param null|int $limit The maximum number of results to return.
	 * @param null|int $offset The number of records to skip before selecting the first result.
	 */
	public function __construct(
		protected int $shopId,
		protected int $minCreated,
		protected int $maxCreated,
		protected ?int $limit = null,
		protected ?int $offset = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'min_created' => $this->minCreated,
			'max_created' => $this->maxCreated,
			'limit' => $this->limit,
			'offset' => $this->offset,
		]);
	}
}
