<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\Review\GetReviewsByListing;
use Hdecom\EtsySdk\Requests\Review\GetReviewsByShop;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class Review extends Resource
{
	/**
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 * @param int $minCreated The earliest unix timestamp for when a record was created.
	 * @param int $maxCreated The latest unix timestamp for when a record was created.
	 */
	public function getReviewsByListing(
		int $listingId,
		?int $limit,
		?int $offset,
		?int $minCreated,
		?int $maxCreated,
	): Response
	{
		return $this->connector->send(new GetReviewsByListing($listingId, $limit, $offset, $minCreated, $maxCreated));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 * @param int $minCreated The earliest unix timestamp for when a record was created.
	 * @param int $maxCreated The latest unix timestamp for when a record was created.
	 */
	public function getReviewsByShop(
		int $shopId,
		?int $limit,
		?int $offset,
		?int $minCreated,
		?int $maxCreated,
	): Response
	{
		return $this->connector->send(new GetReviewsByShop($shopId, $limit, $offset, $minCreated, $maxCreated));
	}
}
