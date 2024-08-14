<?php

namespace Hdecom\EtsySdk\Requests\SellerTaxonomy;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSellerTaxonomyNodes
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves the full hierarchy tree of seller taxonomy nodes.
 */
class GetSellerTaxonomyNodes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/seller-taxonomy/nodes";
	}


	public function __construct()
	{
	}
}
