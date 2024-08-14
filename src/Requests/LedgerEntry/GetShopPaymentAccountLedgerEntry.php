<?php

namespace Hdecom\EtsySdk\Requests\LedgerEntry;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShopPaymentAccountLedgerEntry
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Get a single Shop Payment Account Ledger's Entry
 */
class GetShopPaymentAccountLedgerEntry extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/payment-account/ledger-entries/{$this->ledgerEntryId}";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $ledgerEntryId The unique ID of the shop owner ledger entry.
	 */
	public function __construct(
		protected int $shopId,
		protected int $ledgerEntryId,
	) {
	}
}
