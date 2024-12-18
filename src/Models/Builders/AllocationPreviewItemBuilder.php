<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationPreviewItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocationPreviewItem
 *
 * @see AllocationPreviewItem
 */
class AllocationPreviewItemBuilder
{
    /**
     * @var AllocationPreviewItem
     */
    private $instance;

    private function __construct(AllocationPreviewItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Allocation Preview Item Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocationPreviewItem());
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
     * Sets quantity field.
     *
     * @param int|string|null $value
     */
    public function quantity($value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets previous quantity field.
     *
     * @param int|string|null $value
     */
    public function previousQuantity($value): self
    {
        $this->instance->setPreviousQuantity($value);
        return $this;
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Unsets memo field.
     */
    public function unsetMemo(): self
    {
        $this->instance->unsetMemo();
        return $this;
    }

    /**
     * Sets timestamp field.
     *
     * @param string|null $value
     */
    public function timestamp(?string $value): self
    {
        $this->instance->setTimestamp($value);
        return $this;
    }

    /**
     * Unsets timestamp field.
     */
    public function unsetTimestamp(): self
    {
        $this->instance->unsetTimestamp();
        return $this;
    }

    /**
     * Sets proration upgrade scheme field.
     *
     * @param string|null $value
     */
    public function prorationUpgradeScheme(?string $value): self
    {
        $this->instance->setProrationUpgradeScheme($value);
        return $this;
    }

    /**
     * Sets proration downgrade scheme field.
     *
     * @param string|null $value
     */
    public function prorationDowngradeScheme(?string $value): self
    {
        $this->instance->setProrationDowngradeScheme($value);
        return $this;
    }

    /**
     * Sets accrue charge field.
     *
     * @param bool|null $value
     */
    public function accrueCharge(?bool $value): self
    {
        $this->instance->setAccrueCharge($value);
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
     * Sets previous price point id field.
     *
     * @param int|null $value
     */
    public function previousPricePointId(?int $value): self
    {
        $this->instance->setPreviousPricePointId($value);
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
     * Initializes a new Allocation Preview Item object.
     */
    public function build(): AllocationPreviewItem
    {
        return CoreHelper::clone($this->instance);
    }
}
