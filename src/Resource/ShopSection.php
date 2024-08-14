<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk\Resource;

use Hdecom\EtsySdk\Requests\ShopSection\CreateShopSection;
use Hdecom\EtsySdk\Requests\ShopSection\DeleteShopSection;
use Hdecom\EtsySdk\Requests\ShopSection\GetShopSection;
use Hdecom\EtsySdk\Requests\ShopSection\GetShopSections;
use Hdecom\EtsySdk\Requests\ShopSection\UpdateShopSection;
use Hdecom\EtsySdk\Resource;
use Saloon\Http\Response;

class ShopSection extends Resource
{
    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     */
    public function getShopSections(int $shopId): Response
    {
        return $this->connector->send(new GetShopSections($shopId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     */
    public function createShopSection(int $shopId): Response
    {
        return $this->connector->send(new CreateShopSection($shopId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $shopSectionId  The numeric ID of a section in a specific Etsy shop.
     */
    public function getShopSection(int $shopId, int $shopSectionId): Response
    {
        return $this->connector->send(new GetShopSection($shopId, $shopSectionId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $shopSectionId  The numeric ID of a section in a specific Etsy shop.
     */
    public function updateShopSection(int $shopId, int $shopSectionId): Response
    {
        return $this->connector->send(new UpdateShopSection($shopId, $shopSectionId));
    }

    /**
     * @param  int  $shopId  The unique positive non-zero numeric ID for an Etsy Shop.
     * @param  int  $shopSectionId  The numeric ID of a section in a specific Etsy shop.
     */
    public function deleteShopSection(int $shopId, int $shopSectionId): Response
    {
        return $this->connector->send(new DeleteShopSection($shopId, $shopSectionId));
    }
}
