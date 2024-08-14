<?php

namespace Hdecom\EtsySdk\Requests\UserAddress;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteUserAddress
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Open API V3 endpoint to delete a UserAddress for a User.
 */
class DeleteUserAddress extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/v3/application/user/addresses/{$this->userAddressId}";
	}


	/**
	 * @param int $userAddressId The numeric ID of the user's address.
	 */
	public function __construct(
		protected int $userAddressId,
	) {
	}
}
