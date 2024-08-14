<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListingImage;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteListingImage
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Open API V3 endpoint to delete a listing image. A copy of the file remains on our
 * servers, and so a deleted image may be re-associated with the listing without re-uploading the
 * original image; see uploadListingImage.
 */
class DeleteListingImage extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}/images/{$this->listingImageId}";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $listingImageId  The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction.
     */
    public function __construct(
        protected int $shopId,
        protected int $listingId,
        protected int $listingImageId,
    ) {}
}
