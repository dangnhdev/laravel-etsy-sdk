<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListingFile;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingFile
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Retrieves a single file associated with the given digital listing. Requesting a file
 * from a physical listing returns an empty result.
 */
class GetListingFile extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}/files/{$this->listingFileId}";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $listingFileId  The unique numeric ID of a file associated with a digital listing.
     */
    public function __construct(
        protected int $shopId,
        protected int $listingId,
        protected int $listingFileId,
    ) {}
}
