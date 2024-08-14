<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListing;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListing
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a listing record by listing ID.
 */
class GetListing extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/listings/{$this->listingId}";
    }

    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  null|array  $includes  An enumerated string that attaches a valid association. Acceptable inputs are 'Shipping', 'Shop', 'Images', 'User', 'Translations' and 'Inventory'.
     * @param  null|string  $language  The IETF language tag for the language of this translation. Ex: `de`, `en`, `es`, `fr`, `it`, `ja`, `nl`, `pl`, `pt`.
     */
    public function __construct(
        protected int $listingId,
        protected ?array $includes = null,
        protected ?string $language = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter(['includes' => $this->includes, 'language' => $this->language]);
    }
}
