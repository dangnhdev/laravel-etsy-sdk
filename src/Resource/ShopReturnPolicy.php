<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopReturnPolicy\ConsolidateShopReturnPolicies;
use Hdecom\EtsySdk\Requests\ShopReturnPolicy\CreateShopReturnPolicy;
use Hdecom\EtsySdk\Requests\ShopReturnPolicy\DeleteShopReturnPolicy;
use Hdecom\EtsySdk\Requests\ShopReturnPolicy\GetShopReturnPolicies;
use Hdecom\EtsySdk\Requests\ShopReturnPolicy\GetShopReturnPolicy;
use Hdecom\EtsySdk\Requests\ShopReturnPolicy\UpdateShopReturnPolicy;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopReturnPolicy extends Resource
{
	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function consolidateShopReturnPolicies(int $shopId): Response
	{
		return $this->connector->send(new ConsolidateShopReturnPolicies($shopId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function getShopReturnPolicies(int $shopId): Response
	{
		return $this->connector->send(new GetShopReturnPolicies($shopId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 */
	public function createShopReturnPolicy(int $shopId): Response
	{
		return $this->connector->send(new CreateShopReturnPolicy($shopId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $returnPolicyId The numeric ID of the [Return Policy](/documentation/reference#operation/getShopReturnPolicies).
	 */
	public function getShopReturnPolicy(int $shopId, int $returnPolicyId): Response
	{
		return $this->connector->send(new GetShopReturnPolicy($shopId, $returnPolicyId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $returnPolicyId The numeric ID of the [Return Policy](/documentation/reference#operation/getShopReturnPolicies).
	 */
	public function updateShopReturnPolicy(int $shopId, int $returnPolicyId): Response
	{
		return $this->connector->send(new UpdateShopReturnPolicy($shopId, $returnPolicyId));
	}


	/**
	 * @param int $shopId The unique positive non-zero numeric ID for an Etsy Shop.
	 * @param int $returnPolicyId The numeric ID of the [Return Policy](/documentation/reference#operation/getShopReturnPolicies).
	 */
	public function deleteShopReturnPolicy(int $shopId, int $returnPolicyId): Response
	{
		return $this->connector->send(new DeleteShopReturnPolicy($shopId, $returnPolicyId));
	}
}
