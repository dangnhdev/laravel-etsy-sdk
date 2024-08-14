<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\UserAddress;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getUserAddress
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationTertiary wt-mr-xs-2"> Feedback only </span><a class="wt-text-link"
 * href="https://github.com/etsy/open-api/discussions" target="_blank" rel="noopener noreferrer">Give
 * feedback</a></div><div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><p
 * class="wt-text-body-01 banner-text">Development for this endpoint is in progress. It will only
 * return a 501 response.</p></div>
 *
 * Open API V3 endpoint to retrieve a UserAddress for a User.
 */
class GetUserAddress extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/user/addresses/{$this->userAddressId}";
    }

    /**
     * @param  int  $userAddressId  The numeric ID of the user's address.
     */
    public function __construct(
        protected int $userAddressId,
    ) {}
}
