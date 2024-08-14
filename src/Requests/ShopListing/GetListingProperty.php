<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\ShopListing;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getListingProperty
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationTertiary wt-mr-xs-2"> Feedback only </span><a class="wt-text-link"
 * href="https://github.com/etsy/open-api/discussions" target="_blank" rel="noopener noreferrer">Give
 * feedback</a></div><div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><p
 * class="wt-text-body-01 banner-text">Development for this endpoint is in progress. It will only
 * return a 501 response.</p></div>
 *
 * Retrieves a listing's property
 */
class GetListingProperty extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/listings/{$this->listingId}/properties/{$this->propertyId}";
    }

    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $propertyId  The unique ID of an Etsy [listing property](/documentation/reference#operation/getListingProperties).
     */
    public function __construct(
        protected int $listingId,
        protected int $propertyId,
    ) {}
}
