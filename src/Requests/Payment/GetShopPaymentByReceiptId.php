<?php

namespace Hdecom\EtsySdk\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShopPaymentByReceiptId
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a payment from a specific receipt, identified by `receipt_id`, from a
 * specific shop, identified by `shop_id`
 */
class GetShopPaymentByReceiptId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/receipts/{$this->receiptId}/payments";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $receiptId The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.
	 */
	public function __construct(
		protected int $shopId,
		protected int $receiptId,
	) {
	}
}
