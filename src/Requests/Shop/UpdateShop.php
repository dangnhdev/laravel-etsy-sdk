<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\Shop;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateShop
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Updates a shop. Assumes that all string parameters are provided in the shop's
 * primary language. Please note that the policy_additional field should only be set for shops located
 * in the EU. Passing a value for this field for shops outside of the EU, will result in an error.
 */
class UpdateShop extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     */
    public function __construct(
        protected int $shopId,
    ) {}
}
