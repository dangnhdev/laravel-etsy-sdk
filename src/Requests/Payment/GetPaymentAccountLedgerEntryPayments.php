<?php

namespace Hdecom\EtsySdk\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPaymentAccountLedgerEntryPayments
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Get a Payment from a PaymentAccount Ledger Entry ID, if applicable
 */
class GetPaymentAccountLedgerEntryPayments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/payment-account/ledger-entries/payments";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param array $ledgerEntryIds
	 */
	public function __construct(
		protected int $shopId,
		protected array $ledgerEntryIds,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['ledger_entry_ids' => $this->ledgerEntryIds]);
	}
}
