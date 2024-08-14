<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListingVariationImage;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateVariationImages
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Creates variation images on a listing. `variation_images` is an array with inputs
 * for the `property_id`, `value_id`, and `image_id` fields. `image_ids` are associated with a
 * `ListingImage` on the listing associated with the provided `listing_id`. `property_id` and
 * `value_id` pairs are associated with a `ListingProduct` on the listing associated with the provided
 * `listing_id`. `variation_images` should not contain any duplicates. `variation_images` does not
 * contain more than one `property_id` as variation images can only be associated on one property. The
 * update overwrites all existing variation images on a listing, so if your request is successful, the
 * variation images on the listing will be exactly those you specify.
 */
class UpdateVariationImages extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v3/application/shops/{$this->shopId}/listings/{$this->listingId}/variation-images";
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function __construct(
        protected int $shopId,
        protected int $listingId,
    ) {}
}
