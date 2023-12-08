<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionComponent;
use AdvancedBillingLib\Models\SubscriptionComponentSubscription;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionComponent
 *
 * @see SubscriptionComponent
 */
class SubscriptionComponentBuilder
{
    /**
     * @var SubscriptionComponent
     */
    private $instance;

    private function __construct(SubscriptionComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription component Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionComponent());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets unit name field.
     */
    public function unitName(?string $value): self
    {
        $this->instance->setUnitName($value);
        return $this;
    }

    /**
     * Sets enabled field.
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets unit balance field.
     */
    public function unitBalance(?int $value): self
    {
        $this->instance->setUnitBalance($value);
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets allocated quantity field.
     */
    public function allocatedQuantity(?int $value): self
    {
        $this->instance->setAllocatedQuantity($value);
        return $this;
    }

    /**
     * Sets pricing scheme field.
     */
    public function pricingScheme(?string $value): self
    {
        $this->instance->setPricingScheme($value);
        return $this;
    }

    /**
     * Unsets pricing scheme field.
     */
    public function unsetPricingScheme(): self
    {
        $this->instance->unsetPricingScheme();
        return $this;
    }

    /**
     * Sets component id field.
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets component handle field.
     */
    public function componentHandle(?string $value): self
    {
        $this->instance->setComponentHandle($value);
        return $this;
    }

    /**
     * Unsets component handle field.
     */
    public function unsetComponentHandle(): self
    {
        $this->instance->unsetComponentHandle();
        return $this;
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets recurring field.
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets upgrade charge field.
     */
    public function upgradeCharge(?string $value): self
    {
        $this->instance->setUpgradeCharge($value);
        return $this;
    }

    /**
     * Unsets upgrade charge field.
     */
    public function unsetUpgradeCharge(): self
    {
        $this->instance->unsetUpgradeCharge();
        return $this;
    }

    /**
     * Sets downgrade credit field.
     */
    public function downgradeCredit(?string $value): self
    {
        $this->instance->setDowngradeCredit($value);
        return $this;
    }

    /**
     * Unsets downgrade credit field.
     */
    public function unsetDowngradeCredit(): self
    {
        $this->instance->unsetDowngradeCredit();
        return $this;
    }

    /**
     * Sets archived at field.
     */
    public function archivedAt(?string $value): self
    {
        $this->instance->setArchivedAt($value);
        return $this;
    }

    /**
     * Unsets archived at field.
     */
    public function unsetArchivedAt(): self
    {
        $this->instance->unsetArchivedAt();
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Unsets price point id field.
     */
    public function unsetPricePointId(): self
    {
        $this->instance->unsetPricePointId();
        return $this;
    }

    /**
     * Sets price point handle field.
     */
    public function pricePointHandle(?string $value): self
    {
        $this->instance->setPricePointHandle($value);
        return $this;
    }

    /**
     * Unsets price point handle field.
     */
    public function unsetPricePointHandle(): self
    {
        $this->instance->unsetPricePointHandle();
        return $this;
    }

    /**
     * Sets price point type field.
     */
    public function pricePointType(?string $value): self
    {
        $this->instance->setPricePointType($value);
        return $this;
    }

    /**
     * Sets price point name field.
     */
    public function pricePointName(?string $value): self
    {
        $this->instance->setPricePointName($value);
        return $this;
    }

    /**
     * Unsets price point name field.
     */
    public function unsetPricePointName(): self
    {
        $this->instance->unsetPricePointName();
        return $this;
    }

    /**
     * Sets product family id field.
     */
    public function productFamilyId(?int $value): self
    {
        $this->instance->setProductFamilyId($value);
        return $this;
    }

    /**
     * Sets product family handle field.
     */
    public function productFamilyHandle(?string $value): self
    {
        $this->instance->setProductFamilyHandle($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?string $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
        return $this;
    }

    /**
     * Unsets use site exchange rate field.
     */
    public function unsetUseSiteExchangeRate(): self
    {
        $this->instance->unsetUseSiteExchangeRate();
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets allow fractional quantities field.
     */
    public function allowFractionalQuantities(?bool $value): self
    {
        $this->instance->setAllowFractionalQuantities($value);
        return $this;
    }

    /**
     * Sets subscription field.
     */
    public function subscription(?SubscriptionComponentSubscription $value): self
    {
        $this->instance->setSubscription($value);
        return $this;
    }

    /**
     * Sets display on hosted page field.
     */
    public function displayOnHostedPage(?bool $value): self
    {
        $this->instance->setDisplayOnHostedPage($value);
        return $this;
    }

    /**
     * Initializes a new subscription component object.
     */
    public function build(): SubscriptionComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
