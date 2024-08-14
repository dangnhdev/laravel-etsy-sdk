<?php

namespace Hdecom\EtsySdk\Requests\ShopReceipt;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createReceiptShipment
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Submits tracking information for a Shop Receipt, which creates a Shop Receipt
 * Shipment entry for the given receipt_id. Each time you successfully submit tracking info, Etsy sends
 * a notification email to the buyer User. When send_bcc is true, Etsy sends shipping notifications to
 * the seller as well. When tracking_code and carrier_name aren't sent, the receipt is marked as
 * shipped only. If the carrier is not supported, you may use `other` as the carrier name so you can
 * provide the tracking code. **NOTES** When shipping within the United States AND the order is over
 * $10 _or_ when shipping to India, tracking code and carrier name ARE required. Access to
 * ShopReceipt's first_line, second_line, city, state, zip, country_iso and formatted_address is
 * contingent in some regions to a preferred partnership status with Etsy
 */
class CreateReceiptShipment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/receipts/{$this->receiptId}/tracking";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $receiptId The receipt to submit tracking for.
	 */
	public function __construct(
		protected int $shopId,
		protected int $receiptId,
	) {
	}
}
