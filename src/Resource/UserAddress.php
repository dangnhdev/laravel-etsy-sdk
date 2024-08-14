<?php

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\UserAddress\DeleteUserAddress;
use Hdecom\EtsySdk\Requests\UserAddress\GetUserAddress;
use Hdecom\EtsySdk\Requests\UserAddress\GetUserAddresses;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class UserAddress extends Resource
{
	/**
	 * @param int $userAddressId The numeric ID of the user's address.
	 */
	public function getUserAddress(int $userAddressId): Response
	{
		return $this->connector->send(new GetUserAddress($userAddressId));
	}


	/**
	 * @param int $userAddressId The numeric ID of the user's address.
	 */
	public function deleteUserAddress(int $userAddressId): Response
	{
		return $this->connector->send(new DeleteUserAddress($userAddressId));
	}


	/**
	 * @param int $limit The maximum number of results to return.
	 * @param int $offset The number of records to skip before selecting the first result.
	 */
	public function getUserAddresses(?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new GetUserAddresses($limit, $offset));
	}
}
