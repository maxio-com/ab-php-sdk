<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\HistoricUsage;
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
     * Initializes a new Subscription Component Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionComponent());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets kind field.
     *
     * @param string|null $value
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets unit name field.
     *
     * @param string|null $value
     */
    public function unitName(?string $value): self
    {
        $this->instance->setUnitName($value);
        return $this;
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets unit balance field.
     *
     * @param int|null $value
     */
    public function unitBalance(?int $value): self
    {
        $this->instance->setUnitBalance($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets allocated quantity field.
     *
     * @param int|string|null $value
     */
    public function allocatedQuantity($value): self
    {
        $this->instance->setAllocatedQuantity($value);
        return $this;
    }

    /**
     * Sets pricing scheme field.
     *
     * @param string|null $value
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
     *
     * @param int|null $value
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets component handle field.
     *
     * @param string|null $value
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
     *
     * @param int|null $value
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets recurring field.
     *
     * @param bool|null $value
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets upgrade charge field.
     *
     * @param string|null $value
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
     *
     * @param string|null $value
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
     *
     * @param \DateTime|null $value
     */
    public function archivedAt(?\DateTime $value): self
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
     *
     * @param int|null $value
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
     *
     * @param string|null $value
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
     *
     * @param string|null $value
     */
    public function pricePointType(?string $value): self
    {
        $this->instance->setPricePointType($value);
        return $this;
    }

    /**
     * Unsets price point type field.
     */
    public function unsetPricePointType(): self
    {
        $this->instance->unsetPricePointType();
        return $this;
    }

    /**
     * Sets price point name field.
     *
     * @param string|null $value
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
     *
     * @param int|null $value
     */
    public function productFamilyId(?int $value): self
    {
        $this->instance->setProductFamilyId($value);
        return $this;
    }

    /**
     * Sets product family handle field.
     *
     * @param string|null $value
     */
    public function productFamilyHandle(?string $value): self
    {
        $this->instance->setProductFamilyHandle($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     *
     * @param bool|null $value
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
     *
     * @param string|null $value
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
     *
     * @param bool|null $value
     */
    public function allowFractionalQuantities(?bool $value): self
    {
        $this->instance->setAllowFractionalQuantities($value);
        return $this;
    }

    /**
     * Sets subscription field.
     *
     * @param SubscriptionComponentSubscription|null $value
     */
    public function subscription(?SubscriptionComponentSubscription $value): self
    {
        $this->instance->setSubscription($value);
        return $this;
    }

    /**
     * Sets historic usages field.
     *
     * @param HistoricUsage[]|null $value
     */
    public function historicUsages(?array $value): self
    {
        $this->instance->setHistoricUsages($value);
        return $this;
    }

    /**
     * Sets display on hosted page field.
     *
     * @param bool|null $value
     */
    public function displayOnHostedPage(?bool $value): self
    {
        $this->instance->setDisplayOnHostedPage($value);
        return $this;
    }

    /**
     * Sets interval field.
     *
     * @param int|null $value
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets interval unit field.
     *
     * @param string|null $value
     */
    public function intervalUnit(?string $value): self
    {
        $this->instance->setIntervalUnit($value);
        return $this;
    }

    /**
     * Unsets interval unit field.
     */
    public function unsetIntervalUnit(): self
    {
        $this->instance->unsetIntervalUnit();
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Subscription Component object.
     */
    public function build(): SubscriptionComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
