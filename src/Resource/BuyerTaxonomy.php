<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\BuyerTaxonomy\GetBuyerTaxonomyNodes;
use Hdecom\EtsySdk\Requests\BuyerTaxonomy\GetPropertiesByBuyerTaxonomyId;
use Hdecom\EtsySdk\Resource;
use Saloon\Http\Response;

class BuyerTaxonomy extends Resource
{
    public function getBuyerTaxonomyNodes(): Response
    {
        return $this->connector->send(new GetBuyerTaxonomyNodes);
    }

    /**
     * @param  int  $taxonomyId  The unique numeric ID of an Etsy taxonomy node, which is a metadata category for listings organized into the seller taxonomy hierarchy tree. For example, the "shoes" taxonomy node (ID: 1429, level: 1) is higher in the hierarchy than "girls' shoes" (ID: 1440, level: 2). The taxonomy nodes assigned to a listing support access to specific standardized product scales and properties. For example, listings assigned the taxonomy nodes "shoes" or "girls' shoes" support access to the "EU" shoe size scale with its associated property names and IDs for EU shoe sizes, such as property `value_id`:"1394", and `name`:"38".
     */
    public function getPropertiesByBuyerTaxonomyId(int $taxonomyId): Response
    {
        return $this->connector->send(new GetPropertiesByBuyerTaxonomyId($taxonomyId));
    }
}
