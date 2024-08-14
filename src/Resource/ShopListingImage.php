<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListingImage\DeleteListingImage;
use Hdecom\EtsySdk\Requests\ShopListingImage\GetListingImage;
use Hdecom\EtsySdk\Requests\ShopListingImage\GetListingImageDeprecated;
use Hdecom\EtsySdk\Requests\ShopListingImage\GetListingImages;
use Hdecom\EtsySdk\Requests\ShopListingImage\GetListingImagesDeprecated;
use Hdecom\EtsySdk\Requests\ShopListingImage\UploadListingImage;
use Hdecom\EtsySdk\Resource;
use Saloon\Contracts\Response;

class ShopListingImage extends Resource
{
    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $listingImageId  The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction.
     */
    public function getListingImageDeprecated(int $shopId, int $listingId, int $listingImageId): Response
    {
        return $this->connector->send(new GetListingImageDeprecated($shopId, $listingId, $listingImageId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $listingImageId  The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction.
     */
    public function deleteListingImage(int $shopId, int $listingId, int $listingImageId): Response
    {
        return $this->connector->send(new DeleteListingImage($shopId, $listingId, $listingImageId));
    }

    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $listingImageId  The numeric ID of the primary [listing image](/documentation/reference#tag/ShopListing-Image) for this transaction.
     */
    public function getListingImage(int $listingId, int $listingImageId): Response
    {
        return $this->connector->send(new GetListingImage($listingId, $listingImageId));
    }

    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function getListingImages(int $listingId): Response
    {
        return $this->connector->send(new GetListingImages($listingId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function getListingImagesDeprecated(int $shopId, int $listingId): Response
    {
        return $this->connector->send(new GetListingImagesDeprecated($shopId, $listingId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function uploadListingImage(int $shopId, int $listingId): Response
    {
        return $this->connector->send(new UploadListingImage($shopId, $listingId));
    }
}
