<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListingInventory;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingInventory
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves the inventory record for a listing. Listings you did not edit using the
 * Etsy.com inventory tools have no inventory records. This endpoint returns SKU data if you are the
 * owner of the inventory records being fetched.
 */
class GetListingInventory extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/listings/{$this->listingId}/inventory";
    }

    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  null|bool  $showDeleted  A boolean value for inventory whether to include deleted products and their offerings. Default value is false.
     * @param  null|string  $includes  An enumerated string that attaches a valid association. Default value is null.
     */
    public function __construct(
        protected int $listingId,
        protected ?bool $showDeleted = null,
        protected ?string $includes = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['show_deleted' => $this->showDeleted, 'includes' => $this->includes]);
    }
}
