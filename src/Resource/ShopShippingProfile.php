<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopShippingProfile\CreateShopShippingProfile;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\CreateShopShippingProfileDestination;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\CreateShopShippingProfileUpgrade;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\DeleteShopShippingProfile;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\DeleteShopShippingProfileDestination;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\DeleteShopShippingProfileUpgrade;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\GetShippingCarriers;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\GetShopShippingProfile;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\GetShopShippingProfileDestinationsByShippingProfile;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\GetShopShippingProfileUpgrades;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\GetShopShippingProfiles;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\UpdateShopShippingProfile;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\UpdateShopShippingProfileDestination;
use Hdecom\EtsySdk\Requests\ShopShippingProfile\UpdateShopShippingProfileUpgrade;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopShippingProfile extends Resource
{
	/**
	 * @param string $originCountryIso The ISO code of the country from which the listing ships.
	 */
	public function getShippingCarriers(string $originCountryIso): Response
	{
		return $this->connector->send(new GetShippingCarriers($originCountryIso));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function getShopShippingProfiles(int $shopId): Response
	{
		return $this->connector->send(new GetShopShippingProfiles($shopId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function createShopShippingProfile(int $shopId): Response
	{
		return $this->connector->send(new CreateShopShippingProfile($shopId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 */
	public function getShopShippingProfile(int $shopId, int $shippingProfileId): Response
	{
		return $this->connector->send(new GetShopShippingProfile($shopId, $shippingProfileId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 */
	public function updateShopShippingProfile(int $shopId, int $shippingProfileId): Response
	{
		return $this->connector->send(new UpdateShopShippingProfile($shopId, $shippingProfileId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 */
	public function deleteShopShippingProfile(int $shopId, int $shippingProfileId): Response
	{
		return $this->connector->send(new DeleteShopShippingProfile($shopId, $shippingProfileId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 */
	public function getShopShippingProfileDestinationsByShippingProfile(
		int $shopId,
		int $shippingProfileId,
		?int $limit,
		?int $offset,
	): Response
	{
		return $this->connector->send(new GetShopShippingProfileDestinationsByShippingProfile($shopId, $shippingProfileId, $limit, $offset));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 */
	public function createShopShippingProfileDestination(int $shopId, int $shippingProfileId): Response
	{
		return $this->connector->send(new CreateShopShippingProfileDestination($shopId, $shippingProfileId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 * @param int $shippingProfileDestinationId The numeric ID of the shipping profile destination in the [shipping profile](/documentation/reference#tag/Shop-ShippingProfile) associated with the listing.
	 */
	public function updateShopShippingProfileDestination(
		int $shopId,
		int $shippingProfileId,
		int $shippingProfileDestinationId,
	): Response
	{
		return $this->connector->send(new UpdateShopShippingProfileDestination($shopId, $shippingProfileId, $shippingProfileDestinationId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 * @param int $shippingProfileDestinationId The numeric ID of the shipping profile destination in the [shipping profile](/documentation/reference#tag/Shop-ShippingProfile) associated with the listing.
	 */
	public function deleteShopShippingProfileDestination(
		int $shopId,
		int $shippingProfileId,
		int $shippingProfileDestinationId,
	): Response
	{
		return $this->connector->send(new DeleteShopShippingProfileDestination($shopId, $shippingProfileId, $shippingProfileDestinationId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 */
	public function getShopShippingProfileUpgrades(int $shopId, int $shippingProfileId): Response
	{
		return $this->connector->send(new GetShopShippingProfileUpgrades($shopId, $shippingProfileId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 */
	public function createShopShippingProfileUpgrade(int $shopId, int $shippingProfileId): Response
	{
		return $this->connector->send(new CreateShopShippingProfileUpgrade($shopId, $shippingProfileId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the [shipping profile](/documentation/reference#operation/getShopShippingProfile) associated with the listing. Required when listing type is `physical`.
	 * @param int $upgradeId The numeric ID that is associated with a shipping upgrade
	 */
	public function updateShopShippingProfileUpgrade(int $shopId, int $shippingProfileId, int $upgradeId): Response
	{
		return $this->connector->send(new UpdateShopShippingProfileUpgrade($shopId, $shippingProfileId, $upgradeId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $shippingProfileId The numeric ID of the shipping profile.
	 * @param int $upgradeId The numeric ID that is associated with a shipping upgrade
	 */
	public function deleteShopShippingProfileUpgrade(int $shopId, int $shippingProfileId, int $upgradeId): Response
	{
		return $this->connector->send(new DeleteShopShippingProfileUpgrade($shopId, $shippingProfileId, $upgradeId));
	}
}
