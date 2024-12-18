<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocateComponents;
use AdvancedBillingLib\Models\CreateAllocation;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocateComponents
 *
 * @see AllocateComponents
 */
class AllocateComponentsBuilder
{
    /**
     * @var AllocateComponents
     */
    private $instance;

    private function __construct(AllocateComponents $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Allocate Components Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocateComponents());
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
     * Sets allocations field.
     *
     * @param CreateAllocation[]|null $value
     */
    public function allocations(?array $value): self
    {
        $this->instance->setAllocations($value);
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
     * Sets payment collection method field.
     *
     * @param string|null $value
     */
    public function paymentCollectionMethod(?string $value): self
    {
        $this->instance->setPaymentCollectionMethod($value);
        return $this;
    }

    /**
     * Sets initiate dunning field.
     *
     * @param bool|null $value
     */
    public function initiateDunning(?bool $value): self
    {
        $this->instance->setInitiateDunning($value);
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
     * Initializes a new Allocate Components object.
     */
    public function build(): AllocateComponents
    {
        return CoreHelper::clone($this->instance);
    }
}
