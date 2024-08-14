<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopHolidayPreferences\GetHolidayPreferences;
use Hdecom\EtsySdk\Requests\ShopHolidayPreferences\UpdateHolidayPreferences;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopHolidayPreferences extends Resource
{
	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function getHolidayPreferences(int $shopId): Response
	{
		return $this->connector->send(new GetHolidayPreferences($shopId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param string $holidayId The unique id that maps to the holiday a country observes. See the [Fulfillment Tutorial docs](https://developer.etsy.com/documentation/tutorials/fulfillment/#country-holidays) for more info
	 */
	public function updateHolidayPreferences(int $shopId, string $holidayId): Response
	{
		return $this->connector->send(new UpdateHolidayPreferences($shopId, $holidayId));
	}
}
