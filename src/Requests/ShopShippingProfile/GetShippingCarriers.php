<?php

namespace Hdecom\EtsySdk\Requests\ShopShippingProfile;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getShippingCarriers
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a list of available shipping carriers and the mail classes associated with
 * them for a given country
 */
class GetShippingCarriers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/shipping-carriers";
	}


	/**
	 * @param string $originCountryIso The ISO code of the country from which the listing ships.
	 */
	public function __construct(
		protected string $originCountryIso,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['origin_country_iso' => $this->originCountryIso]);
	}
}
