<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListing;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingsByShopReturnPolicy
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Gets all listings associated with a Return Policy.
 */
class GetListingsByShopReturnPolicy extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/policies/return/{$this->returnPolicyId}/listings";
    }

    /**
     * @param  int  $returnPolicyId  The numeric ID of the [Return Policy](/documentation/reference#operation/getShopReturnPolicies).
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     */
    public function __construct(
        protected int $returnPolicyId,
        protected int $shopId,
    ) {}
}
