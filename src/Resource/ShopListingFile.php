<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopListingFile\DeleteListingFile;
use Hdecom\EtsySdk\Requests\ShopListingFile\GetAllListingFiles;
use Hdecom\EtsySdk\Requests\ShopListingFile\GetListingFile;
use Hdecom\EtsySdk\Requests\ShopListingFile\UploadListingFile;
use Hdecom\EtsySdk\Resource;
use Saloon\Http\Response;

class ShopListingFile extends Resource
{
    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $listingFileId  The unique numeric ID of a file associated with a digital listing.
     */
    public function getListingFile(int $shopId, int $listingId, int $listingFileId): Response
    {
        return $this->connector->send(new GetListingFile($shopId, $listingId, $listingFileId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $listingFileId  The unique numeric ID of a file associated with a digital listing.
     */
    public function deleteListingFile(int $shopId, int $listingId, int $listingFileId): Response
    {
        return $this->connector->send(new DeleteListingFile($shopId, $listingId, $listingFileId));
    }

    /**
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     */
    public function getAllListingFiles(int $listingId, int $shopId): Response
    {
        return $this->connector->send(new GetAllListingFiles($listingId, $shopId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $listingId  The numeric ID for the [listing](/documentation/reference#tag/ShopListing) associated to this transaction.
     */
    public function uploadListingFile(int $shopId, int $listingId): Response
    {
        return $this->connector->send(new UploadListingFile($shopId, $listingId));
    }
}
