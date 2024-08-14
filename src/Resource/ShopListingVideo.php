<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListingVideo\DeleteListingVideo;
use Hdecom\EtsySdk\Requests\ShopListingVideo\GetListingVideo;
use Hdecom\EtsySdk\Requests\ShopListingVideo\GetListingVideos;
use Hdecom\EtsySdk\Requests\ShopListingVideo\UploadListingVideo;
use Hdecom\EtsySdk\Resource;
use Saloon\Http\Response;

class ShopListingVideo extends Resource
{
    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $videoId  The unique ID of a video associated with a listing.
     */
    public function deleteListingVideo(int $shopId, int $listingId, int $videoId): Response
    {
        return $this->connector->send(new DeleteListingVideo($shopId, $listingId, $videoId));
    }

    /**
     * @param  int  $videoId  The unique ID of a video associated with a listing.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function getListingVideo(int $videoId, int $listingId): Response
    {
        return $this->connector->send(new GetListingVideo($videoId, $listingId));
    }

    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function getListingVideos(int $listingId): Response
    {
        return $this->connector->send(new GetListingVideos($listingId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function uploadListingVideo(int $shopId, int $listingId): Response
    {
        return $this->connector->send(new UploadListingVideo($shopId, $listingId));
    }
}
