<?php

namespace Hdecom\EtsySdk\Requests\BuyerTaxonomy;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPropertiesByBuyerTaxonomyId
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a list of product properties, with applicable scales and values, supported
 * for a specific buyer taxonomy ID.
 */
class GetPropertiesByBuyerTaxonomyId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/buyer-taxonomy/nodes/{$this->taxonomyId}/properties";
	}


	/**
	 * @param int $taxonomyId The unique numeric ID of an Etsy taxonomy node, which is a metadata category for listings organized into the seller taxonomy hierarchy tree. For example, the "shoes" taxonomy node (ID: 1429, level: 1) is higher in the hierarchy than "girls' shoes" (ID: 1440, level: 2). The taxonomy nodes assigned to a listing support access to specific standardized product scales and properties. For example, listings assigned the taxonomy nodes "shoes" or "girls' shoes" support access to the "EU" shoe size scale with its associated property names and IDs for EU shoe sizes, such as property `value_id`:"1394", and `name`:"38".
	 */
	public function __construct(
		protected int $taxonomyId,
	) {
	}
}
