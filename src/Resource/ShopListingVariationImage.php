<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListingVariationImage\GetListingVariationImages;
use Hdecom\EtsySdk\Requests\ShopListingVariationImage\UpdateVariationImages;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopListingVariationImage extends Resource
{
	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function getListingVariationImages(int $shopId, int $listingId): Response
	{
		return $this->connector->send(new GetListingVariationImages($shopId, $listingId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function updateVariationImages(int $shopId, int $listingId): Response
	{
		return $this->connector->send(new UpdateVariationImages($shopId, $listingId));
	}
}
