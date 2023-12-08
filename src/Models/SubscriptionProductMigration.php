<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionProductMigration implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var bool|null
     */
    private $includeTrial = false;

    /**
     * @var bool|null
     */
    private $includeInitialCharge = false;

    /**
     * @var bool|null
     */
    private $includeCoupons = true;

    /**
     * @var bool|null
     */
    private $preservePeriod = false;

    /**
     * @var string|null
     */
    private $productHandle;

    /**
     * @var string|null
     */
    private $productPricePointHandle;

    /**
     * @var Proration|null
     */
    private $proration;

    /**
     * Returns Product Id.
     * The ID of the target Product. Either a product_id or product_handle must be present. A Subscription
     * can be migrated to another product for both the current Product Family and another Product Family.
     * Note: Going to another Product Family, components will not be migrated as well.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * The ID of the target Product. Either a product_id or product_handle must be present. A Subscription
     * can be migrated to another product for both the current Product Family and another Product Family.
     * Note: Going to another Product Family, components will not be migrated as well.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Product Price Point Id.
     * The ID of the specified product's price point. This can be passed to migrate to a non-default price
     * point.
     */
    public function getProductPricePointId(): ?int
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     * The ID of the specified product's price point. This can be passed to migrate to a non-default price
     * point.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Returns Include Trial.
     * Whether to include the trial period configured for the product price point when starting a new
     * billing period. Note that if preserve_period is set, then include_trial will be ignored.
     */
    public function getIncludeTrial(): ?bool
    {
        return $this->includeTrial;
    }

    /**
     * Sets Include Trial.
     * Whether to include the trial period configured for the product price point when starting a new
     * billing period. Note that if preserve_period is set, then include_trial will be ignored.
     *
     * @maps include_trial
     */
    public function setIncludeTrial(?bool $includeTrial): void
    {
        $this->includeTrial = $includeTrial;
    }

    /**
     * Returns Include Initial Charge.
     * If `true` is sent initial charges will be assessed.
     */
    public function getIncludeInitialCharge(): ?bool
    {
        return $this->includeInitialCharge;
    }

    /**
     * Sets Include Initial Charge.
     * If `true` is sent initial charges will be assessed.
     *
     * @maps include_initial_charge
     */
    public function setIncludeInitialCharge(?bool $includeInitialCharge): void
    {
        $this->includeInitialCharge = $includeInitialCharge;
    }

    /**
     * Returns Include Coupons.
     * If `true` is sent, any coupons associated with the subscription will be applied to the migration. If
     * `false` is sent, coupons will not be applied. Note: When migrating to a new product family, the
     * coupon cannot migrate.
     */
    public function getIncludeCoupons(): ?bool
    {
        return $this->includeCoupons;
    }

    /**
     * Sets Include Coupons.
     * If `true` is sent, any coupons associated with the subscription will be applied to the migration. If
     * `false` is sent, coupons will not be applied. Note: When migrating to a new product family, the
     * coupon cannot migrate.
     *
     * @maps include_coupons
     */
    public function setIncludeCoupons(?bool $includeCoupons): void
    {
        $this->includeCoupons = $includeCoupons;
    }

    /**
     * Returns Preserve Period.
     * If `false` is sent, the subscription's billing period will be reset to today and the full price of
     * the new product will be charged. If `true` is sent, the billing period will not change and a
     * prorated charge will be issued for the new product.
     */
    public function getPreservePeriod(): ?bool
    {
        return $this->preservePeriod;
    }

    /**
     * Sets Preserve Period.
     * If `false` is sent, the subscription's billing period will be reset to today and the full price of
     * the new product will be charged. If `true` is sent, the billing period will not change and a
     * prorated charge will be issued for the new product.
     *
     * @maps preserve_period
     */
    public function setPreservePeriod(?bool $preservePeriod): void
    {
        $this->preservePeriod = $preservePeriod;
    }

    /**
     * Returns Product Handle.
     * The handle of the target Product. Either a product_id or product_handle must be present. A
     * Subscription can be migrated to another product for both the current Product Family and another
     * Product Family. Note: Going to another Product Family, components will not be migrated as well.
     */
    public function getProductHandle(): ?string
    {
        return $this->productHandle;
    }

    /**
     * Sets Product Handle.
     * The handle of the target Product. Either a product_id or product_handle must be present. A
     * Subscription can be migrated to another product for both the current Product Family and another
     * Product Family. Note: Going to another Product Family, components will not be migrated as well.
     *
     * @maps product_handle
     */
    public function setProductHandle(?string $productHandle): void
    {
        $this->productHandle = $productHandle;
    }

    /**
     * Returns Product Price Point Handle.
     * The ID or handle of the specified product's price point. This can be passed to migrate to a non-
     * default price point.
     */
    public function getProductPricePointHandle(): ?string
    {
        return $this->productPricePointHandle;
    }

    /**
     * Sets Product Price Point Handle.
     * The ID or handle of the specified product's price point. This can be passed to migrate to a non-
     * default price point.
     *
     * @maps product_price_point_handle
     */
    public function setProductPricePointHandle(?string $productPricePointHandle): void
    {
        $this->productPricePointHandle = $productPricePointHandle;
    }

    /**
     * Returns Proration.
     */
    public function getProration(): ?Proration
    {
        return $this->proration;
    }

    /**
     * Sets Proration.
     *
     * @maps proration
     */
    public function setProration(?Proration $proration): void
    {
        $this->proration = $proration;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->productId)) {
            $json['product_id']                 = $this->productId;
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id']     = $this->productPricePointId;
        }
        if (isset($this->includeTrial)) {
            $json['include_trial']              = $this->includeTrial;
        }
        if (isset($this->includeInitialCharge)) {
            $json['include_initial_charge']     = $this->includeInitialCharge;
        }
        if (isset($this->includeCoupons)) {
            $json['include_coupons']            = $this->includeCoupons;
        }
        if (isset($this->preservePeriod)) {
            $json['preserve_period']            = $this->preservePeriod;
        }
        if (isset($this->productHandle)) {
            $json['product_handle']             = $this->productHandle;
        }
        if (isset($this->productPricePointHandle)) {
            $json['product_price_point_handle'] = $this->productPricePointHandle;
        }
        if (isset($this->proration)) {
            $json['proration']                  = $this->proration;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
