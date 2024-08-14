<?php

namespace Hdecom\EtsySdk\Requests\ShopHolidayPreferences;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateHolidayPreferences
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 *     Updates the preference for whether the seller will process orders or not on the
 * holiday.     "Currently only supported in the US and CA"
 */
class UpdateHolidayPreferences extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/holiday-preferences/{$this->holidayId}";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param string $holidayId The unique id that maps to the holiday a country observes. See the [Fulfillment Tutorial docs](https://developer.etsy.com/documentation/tutorials/fulfillment/#country-holidays) for more info
	 */
	public function __construct(
		protected int $shopId,
		protected string $holidayId,
	) {
	}
}
