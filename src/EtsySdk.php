<?php

declare(strict_types=1);

namespace Hdecom\EtsySdk;

use Hdecom\EtsySdk\Resource\BuyerTaxonomy;
use Hdecom\EtsySdk\Resource\LedgerEntry;
use Hdecom\EtsySdk\Resource\Other;
use Hdecom\EtsySdk\Resource\Payment;
use Hdecom\EtsySdk\Resource\Review;
use Hdecom\EtsySdk\Resource\SellerTaxonomy;
use Hdecom\EtsySdk\Resource\Shop;
use Hdecom\EtsySdk\Resource\ShopHolidayPreferences;
use Hdecom\EtsySdk\Resource\ShopListing;
use Hdecom\EtsySdk\Resource\ShopListingFile;
use Hdecom\EtsySdk\Resource\ShopListingImage;
use Hdecom\EtsySdk\Resource\ShopListingInventory;
use Hdecom\EtsySdk\Resource\ShopListingOffering;
use Hdecom\EtsySdk\Resource\ShopListingProduct;
use Hdecom\EtsySdk\Resource\ShopListingTranslation;
use Hdecom\EtsySdk\Resource\ShopListingVariationImage;
use Hdecom\EtsySdk\Resource\ShopListingVideo;
use Hdecom\EtsySdk\Resource\ShopProductionPartner;
use Hdecom\EtsySdk\Resource\ShopReceipt;
use Hdecom\EtsySdk\Resource\ShopReceiptTransactions;
use Hdecom\EtsySdk\Resource\ShopReturnPolicy;
use Hdecom\EtsySdk\Resource\ShopSection;
use Hdecom\EtsySdk\Resource\ShopShippingProfile;
use Hdecom\EtsySdk\Resource\User;
use Hdecom\EtsySdk\Resource\UserAddress;
use Saloon\Http\Connector;

/**
 * Etsy Open API v3
 *
 * <div class="wt-text-body-01"><p class="wt-pt-xs-2 wt-pb-xs-2">Etsy's Open API provides a simple RESTful interface for various Etsy.com features. The API endpoints are meant to replace Etsy's Open API v2, which is scheduled to end service in 2022.</p><p class="wt-pb-xs-2">All of the endpoints are callable and the majority of the API endpoints are now in a beta phase. This means we do not expect to make any breaking changes before our general release. A handful of endpoints are currently interface stubs (labeled “Feedback Only”) and returns a "501 Not Implemented" response code when called.</p><p class="wt-pb-xs-2">If you'd like to report an issue or provide feedback on the API design, <a target="_blank" class="wt-text-link wt-p-xs-0" href="https://github.com/etsy/open-api/discussions">please add an issue in Github</a>.</p></div>&copy; 2021-2024 Etsy, Inc. All Rights Reserved. Use of this code is subject to Etsy's <a class='wt-text-link wt-p-xs-0' target='_blank' href='https://www.etsy.com/legal/api'>API Developer Terms of Use</a>.
 */
class EtsySdk extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://openapi.etsy.com';
    }

    public function buyerTaxonomy(): BuyerTaxonomy
    {
        return new BuyerTaxonomy($this);
    }

    public function ledgerEntry(): LedgerEntry
    {
        return new LedgerEntry($this);
    }

    public function other(): Other
    {
        return new Other($this);
    }

    public function payment(): Payment
    {
        return new Payment($this);
    }

    public function review(): Review
    {
        return new Review($this);
    }

    public function sellerTaxonomy(): SellerTaxonomy
    {
        return new SellerTaxonomy($this);
    }

    public function shop(): Shop
    {
        return new Shop($this);
    }

    public function shopHolidayPreferences(): ShopHolidayPreferences
    {
        return new ShopHolidayPreferences($this);
    }

    public function shopListing(): ShopListing
    {
        return new ShopListing($this);
    }

    public function shopListingFile(): ShopListingFile
    {
        return new ShopListingFile($this);
    }

    public function shopListingImage(): ShopListingImage
    {
        return new ShopListingImage($this);
    }

    public function shopListingInventory(): ShopListingInventory
    {
        return new ShopListingInventory($this);
    }

    public function shopListingOffering(): ShopListingOffering
    {
        return new ShopListingOffering($this);
    }

    public function shopListingProduct(): ShopListingProduct
    {
        return new ShopListingProduct($this);
    }

    public function shopListingTranslation(): ShopListingTranslation
    {
        return new ShopListingTranslation($this);
    }

    public function shopListingVariationImage(): ShopListingVariationImage
    {
        return new ShopListingVariationImage($this);
    }

    public function shopListingVideo(): ShopListingVideo
    {
        return new ShopListingVideo($this);
    }

    public function shopProductionPartner(): ShopProductionPartner
    {
        return new ShopProductionPartner($this);
    }

    public function shopReceipt(): ShopReceipt
    {
        return new ShopReceipt($this);
    }

    public function shopReceiptTransactions(): ShopReceiptTransactions
    {
        return new ShopReceiptTransactions($this);
    }

    public function shopReturnPolicy(): ShopReturnPolicy
    {
        return new ShopReturnPolicy($this);
    }

    public function shopSection(): ShopSection
    {
        return new ShopSection($this);
    }

    public function shopShippingProfile(): ShopShippingProfile
    {
        return new ShopShippingProfile($this);
    }

    public function user(): User
    {
        return new User($this);
    }

    public function userAddress(): UserAddress
    {
        return new UserAddress($this);
    }
}
