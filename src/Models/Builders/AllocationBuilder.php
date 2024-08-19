<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Allocation;
use AdvancedBillingLib\Models\PaymentForAllocation;
use Core\Utils\CoreHelper;

/**
 * Builder for model Allocation
 *
 * @see Allocation
 */
class AllocationBuilder
{
    /**
     * @var Allocation
     */
    private $instance;

    private function __construct(Allocation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new allocation Builder object.
     */
    public static function init(): self
    {
        return new self(new Allocation());
    }

    /**
     * Sets allocation id field.
     */
    public function allocationId(?int $value): self
    {
        $this->instance->setAllocationId($value);
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
     * Sets quantity field.
     */
    public function quantity($value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets previous quantity field.
     */
    public function previousQuantity($value): self
    {
        $this->instance->setPreviousQuantity($value);
        return $this;
    }

    /**
     * Sets memo field.
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
     */
    public function timestamp(?\DateTime $value): self
    {
        $this->instance->setTimestamp($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets proration upgrade scheme field.
     */
    public function prorationUpgradeScheme(?string $value): self
    {
        $this->instance->setProrationUpgradeScheme($value);
        return $this;
    }

    /**
     * Sets proration downgrade scheme field.
     */
    public function prorationDowngradeScheme(?string $value): self
    {
        $this->instance->setProrationDowngradeScheme($value);
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
     * Sets price point name field.
     */
    public function pricePointName(?string $value): self
    {
        $this->instance->setPricePointName($value);
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
     * Sets interval field.
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets interval unit field.
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
     */
    public function previousPricePointId(?int $value): self
    {
        $this->instance->setPreviousPricePointId($value);
        return $this;
    }

    /**
     * Sets accrue charge field.
     */
    public function accrueCharge(?bool $value): self
    {
        $this->instance->setAccrueCharge($value);
        return $this;
    }

    /**
     * Sets initiate dunning field.
     */
    public function initiateDunning(?bool $value): self
    {
        $this->instance->setInitiateDunning($value);
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
     * Sets payment field.
     */
    public function payment(?PaymentForAllocation $value): self
    {
        $this->instance->setPayment($value);
        return $this;
    }

    /**
     * Unsets payment field.
     */
    public function unsetPayment(): self
    {
        $this->instance->unsetPayment();
        return $this;
    }

    /**
     * Sets expires at field.
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Sets used quantity field.
     */
    public function usedQuantity(?int $value): self
    {
        $this->instance->setUsedQuantity($value);
        return $this;
    }

    /**
     * Sets charge id field.
     */
    public function chargeId(?int $value): self
    {
        $this->instance->setChargeId($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new allocation object.
     */
    public function build(): Allocation
    {
        return CoreHelper::clone($this->instance);
    }
}
