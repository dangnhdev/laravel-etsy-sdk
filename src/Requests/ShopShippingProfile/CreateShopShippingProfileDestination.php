<?php

namespace Hdecom\EtsySdk\Requests\ShopShippingProfile;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createShopShippingProfileDestination
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Creates a new shipping destination, which sets the shipping cost, carrier, and class
 * for a destination in a [shipping profile](/documentation/reference/#tag/Shop-ShippingProfile).
 * createShopShippingProfileDestination assigns costs using the currency of the associated shop. Set
 * the destination using either `destination_country_iso` or `destination_region`;
 * `destination_country_iso` and `destination_region` are mutually exclusive — set one or the other.
 * Setting both triggers error 400. If the request sets neither `destination_country_iso` nor
 * `destination_region`, the default destination is "everywhere". You must also either assign both a
 * `shipping_carrier_id` AND `mail_class` or both `min_delivery_days` AND `max_delivery_days`.
 */
class CreateShopShippingProfileDestination extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shops/{$this->shopId}/shipping-profiles/{$this->shippingProfileId}/destinations";
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 */
	public function __construct(
		protected int $shopId,
		protected int $shippingProfileId,
	) {
	}
}
