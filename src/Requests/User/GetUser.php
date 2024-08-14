<?php

namespace Hdecom\EtsySdk\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getUser
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a user profile based on a unique user ID.                  Access is
 * limited to profiles of the authenticated user                  or linked buyers. For the
 * primary_email field, specific                  app-based permissions are required and granted
 * case-by-case.
 */
class GetUser extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/v3/application/users/{$this->userId}";
	}


	/**
	 * @param int $userId
	 */
	public function __construct(
		protected int $userId,
	) {
	}
}
