<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\SellerTaxonomy\GetPropertiesByTaxonomyId;
use Hdecom\EtsySdk\Requests\SellerTaxonomy\GetSellerTaxonomyNodes;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class SellerTaxonomy extends Resource
{
	public function getSellerTaxonomyNodes(): Response
	{
		return $this->connector->send(new GetSellerTaxonomyNodes());
	}


	/**
	 * @param int $taxonomyId The unique numeric ID of an Etsy taxonomy node, which is a metadata category for listings organized into the seller taxonomy hierarchy tree. For example, the "shoes" taxonomy node (ID: 1429, level: 1) is higher in the hierarchy than "girls' shoes" (ID: 1440, level: 2). The taxonomy nodes assigned to a listing support access to specific standardized product scales and properties. For example, listings assigned the taxonomy nodes "shoes" or "girls' shoes" support access to the "EU" shoe size scale with its associated property names and IDs for EU shoe sizes, such as property `value_id`:"1394", and `name`:"38".
	 */
	public function getPropertiesByTaxonomyId(int $taxonomyId): Response
	{
		return $this->connector->send(new GetPropertiesByTaxonomyId($taxonomyId));
	}
}
