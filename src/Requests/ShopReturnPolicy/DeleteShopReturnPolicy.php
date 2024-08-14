<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopReturnPolicy;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteShopReturnPolicy
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Deletes an existing Return Policy. Deletion is only allowed for policies which have
 * no associated listings – move them to another policy before attempting deletion.
 */
class DeleteShopReturnPolicy extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/policies/return/{$this->returnPolicyId}";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $returnPolicyId  The numeric ID of the [Return Policy](/documentation/reference#operation/getShopReturnPolicies).
     */
    public function __construct(
        protected int $shopId,
        protected int $returnPolicyId,
    ) {}
}
