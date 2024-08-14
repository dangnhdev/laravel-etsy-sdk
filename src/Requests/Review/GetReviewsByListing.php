<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Requests\Review;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getReviewsByListing
 *
 * <div class="wt-display-flex-xs wt-align-items-center wt-mt-xs-2 wt-mb-xs-3"><span class="wt-badge
 * wt-badge--notificationPrimary wt-bg-slime-tint wt-mr-xs-2">General Release</span><a
 * class="wt-text-link" href="https://github.com/etsy/open-api/discussions" target="_blank"
 * rel="noopener noreferrer">Report bug</a></div><div class="wt-display-flex-xs wt-align-items-center
 * wt-mt-xs-2 wt-mb-xs-3"><p class="wt-text-body-01 banner-text">This endpoint is ready for production
 * use.</p></div>
 *
 * Open API V3 to retrieve the reviews for a listing given its ID.
 */
class GetReviewsByListing extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v3/application/listings/{$this->listingId}/reviews";
    }

    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  null|int  $limit  The maximum number of results to return.
     * @param  null|int  $offset  The number of records to skip before selecting the first result.
     * @param  null|int  $minCreated  The earliest unix timestamp for when a record was created.
     * @param  null|int  $maxCreated  The latest unix timestamp for when a record was created.
     */
    public function __construct(
        protected int $listingId,
        protected ?int $limit = null,
        protected ?int $offset = null,
        protected ?int $minCreated = null,
        protected ?int $maxCreated = null,
    ) {}

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'offset' => $this->offset,
            'min_created' => $this->minCreated,
            'max_created' => $this->maxCreated,
        ]);
    }
}
