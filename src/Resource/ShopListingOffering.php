<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListingOffering\GetListingOffering;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopListingOffering extends Resource
{
	/**
	 * @param int $listingId
	 * @param int $productId
	 * @param int $productOfferingId
	 */
	public function getListingOffering(int $listingId, int $productId, int $productOfferingId): Response
	{
		return $this->connector->send(new GetListingOffering($listingId, $productId, $productOfferingId));
	}
}
