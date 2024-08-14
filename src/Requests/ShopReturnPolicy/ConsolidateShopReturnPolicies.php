<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopReturnPolicy;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * consolidateShopReturnPolicies
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Consolidates Return Policies by moving all listings from a source return policy to a
 * destination return policy, and deleting the source return policy. This is commonly used in the event
 * that a user attempts to update a Return Policy such that its data is a duplicate of some other
 * Return Policy, which is prevented.
 */
class ConsolidateShopReturnPolicies extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/policies/return/consolidate";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     */
    public function __construct(
        protected int $shopId,
    ) {}
}
