<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListing\CreateDraftListing;
use Hdecom\EtsySdk\Requests\ShopListing\DeleteListing;
use Hdecom\EtsySdk\Requests\ShopListing\DeleteListingProperty;
use Hdecom\EtsySdk\Requests\ShopListing\FindAllActiveListingsByShop;
use Hdecom\EtsySdk\Requests\ShopListing\FindAllListingsActive;
use Hdecom\EtsySdk\Requests\ShopListing\GetFeaturedListingsByShop;
use Hdecom\EtsySdk\Requests\ShopListing\GetListing;
use Hdecom\EtsySdk\Requests\ShopListing\GetListingProperties;
use Hdecom\EtsySdk\Requests\ShopListing\GetListingProperty;
use Hdecom\EtsySdk\Requests\ShopListing\GetListingsByListingIds;
use Hdecom\EtsySdk\Requests\ShopListing\GetListingsByShop;
use Hdecom\EtsySdk\Requests\ShopListing\GetListingsByShopReceipt;
use Hdecom\EtsySdk\Requests\ShopListing\GetListingsByShopReturnPolicy;
use Hdecom\EtsySdk\Requests\ShopListing\GetListingsByShopSectionId;
use Hdecom\EtsySdk\Requests\ShopListing\UpdateListing;
use Hdecom\EtsySdk\Requests\ShopListing\UpdateListingDeprecated;
use Hdecom\EtsySdk\Requests\ShopListing\UpdateListingProperty;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopListing extends Resource
{
	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param string $state When _updating_ a listing, this value can be either `active` or `inactive`. Note: Setting a `draft` listing to `active` will also publish the listing on etsy.com and requires that the listing have an image set. Setting a `sold_out` listing to active will update the quantity to 1 and renew the listing on etsy.com.
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 * @param string $sortOn The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
	 * @param string $sortOrder The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
	 * @param array $includes An enumerated string that attaches a valid association. Acceptable inputs are 'Shipping', 'Shop', 'Images', 'User', 'Translations' and 'Inventory'.
	 */
	public function getListingsByShop(
		int $shopId,
		?string $state,
		?int $limit,
		?int $offset,
		?string $sortOn,
		?string $sortOrder,
		?array $includes,
	): Response
	{
		return $this->connector->send(new GetListingsByShop($shopId, $state, $limit, $offset, $sortOn, $sortOrder, $includes));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function createDraftListing(int $shopId): Response
	{
		return $this->connector->send(new CreateDraftListing($shopId));
	}


	/**
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 * @param array $includes An enumerated string that attaches a valid association. Acceptable inputs are 'Shipping', 'Shop', 'Images', 'User', 'Translations' and 'Inventory'.
	 * @param string $language The IETF language tag for the language of this translation. Ex: `de`, `en`, `es`, `fr`, `it`, `ja`, `nl`, `pl`, `pt`.
	 */
	public function getListing(int $listingId, ?array $includes, ?string $language): Response
	{
		return $this->connector->send(new GetListing($listingId, $includes, $language));
	}


	/**
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function deleteListing(int $listingId): Response
	{
		return $this->connector->send(new DeleteListing($listingId));
	}


	/**
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 * @param string $keywords Search term or phrase that must appear in all results.
	 * @param string $sortOn The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
	 * @param string $sortOrder The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
	 * @param float|int $minPrice The minimum price of listings to be returned by a search result.
	 * @param float|int $maxPrice The maximum price of listings to be returned by a search result.
	 * @param int $taxonomyId The numerical taxonomy ID of the listing. See [SellerTaxonomy](/documentation/reference#tag/SellerTaxonomy) and [BuyerTaxonomy](/documentation/reference#tag/BuyerTaxonomy) for more information.
	 * @param string $shopLocation Filters by shop location. If location cannot be parsed, Etsy responds with an error.
	 */
	public function findAllListingsActive(
		?int $limit,
		?int $offset,
		?string $keywords,
		?string $sortOn,
		?string $sortOrder,
		float|int|null $minPrice,
		float|int|null $maxPrice,
		?int $taxonomyId,
		?string $shopLocation,
	): Response
	{
		return $this->connector->send(new FindAllListingsActive($limit, $offset, $keywords, $sortOn, $sortOrder, $minPrice, $maxPrice, $taxonomyId, $shopLocation));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $limit The maximum number of results to return.
	 * @param string $sortOn The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
	 * @param string $sortOrder The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
	 * @param int $offset The number of records to skip before selecting the first result.
	 * @param string $keywords Search term or phrase that must appear in all results.
	 */
	public function findAllActiveListingsByShop(
		int $shopId,
		?int $limit,
		?string $sortOn,
		?string $sortOrder,
		?int $offset,
		?string $keywords,
	): Response
	{
		return $this->connector->send(new FindAllActiveListingsByShop($shopId, $limit, $sortOn, $sortOrder, $offset, $keywords));
	}


	/**
	 * @param array $listingIds The list of numeric IDS for the listings in a specific Etsy shop.
	 * @param array $includes An enumerated string that attaches a valid association. Acceptable inputs are 'Shipping', 'Shop', 'Images', 'User', 'Translations' and 'Inventory'.
	 */
	public function getListingsByListingIds(array $listingIds, ?array $includes): Response
	{
		return $this->connector->send(new GetListingsByListingIds($listingIds, $includes));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 */
	public function getFeaturedListingsByShop(int $shopId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new GetFeaturedListingsByShop($shopId, $limit, $offset));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 * @param int $propertyId The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties).
	 */
	public function updateListingProperty(int $shopId, int $listingId, int $propertyId): Response
	{
		return $this->connector->send(new UpdateListingProperty($shopId, $listingId, $propertyId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 * @param int $propertyId The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties).
	 */
	public function deleteListingProperty(int $shopId, int $listingId, int $propertyId): Response
	{
		return $this->connector->send(new DeleteListingProperty($shopId, $listingId, $propertyId));
	}


	/**
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 * @param int $propertyId The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties).
	 */
	public function getListingProperty(int $listingId, int $propertyId): Response
	{
		return $this->connector->send(new GetListingProperty($listingId, $propertyId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function getListingProperties(int $shopId, int $listingId): Response
	{
		return $this->connector->send(new GetListingProperties($shopId, $listingId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function updateListingDeprecated(int $shopId, int $listingId): Response
	{
		return $this->connector->send(new UpdateListingDeprecated($shopId, $listingId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $listingId The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
	 */
	public function updateListing(int $shopId, int $listingId): Response
	{
		return $this->connector->send(new UpdateListing($shopId, $listingId));
	}


	/**
	 * @param int $receiptId The numeric ID for the [receipt](/documentation/reference#tag/Shop-Receipt) associated to this transaction.
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 */
	public function getListingsByShopReceipt(int $receiptId, int $shopId, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new GetListingsByShopReceipt($receiptId, $shopId, $limit, $offset));
	}


	/**
	 * @param int $returnPolicyId The numeric ID of the [Return Policy](/documentation/reference#operation/getShopReturnPolicies).
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function getListingsByShopReturnPolicy(int $returnPolicyId, int $shopId): Response
	{
		return $this->connector->send(new GetListingsByShopReturnPolicy($returnPolicyId, $shopId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param array $shopSectionIds A list of numeric IDS for all sections in a specific Etsy shop.
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 * @param string $sortOn The value to sort a search result of listings on. NOTES: a) `sort_on` only works when combined with one of the search options (keywords, region, etc.). b) when using `score` the returned results will always be in _descending_ order, regardless of the `sort_order` parameter.
	 * @param string $sortOrder The ascending(up) or descending(down) order to sort listings by. NOTE: sort_order only works when combined with one of the search options (keywords, region, etc.).
	 */
	public function getListingsByShopSectionId(
		int $shopId,
		array $shopSectionIds,
		?int $limit,
		?int $offset,
		?string $sortOn,
		?string $sortOrder,
	): Response
	{
		return $this->connector->send(new GetListingsByShopSectionId($shopId, $shopSectionIds, $limit, $offset, $sortOn, $sortOrder));
	}
}
