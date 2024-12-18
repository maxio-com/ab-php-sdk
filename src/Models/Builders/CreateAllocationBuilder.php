<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BillingSchedule;
use AdvancedBillingLib\Models\CreateAllocation;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateAllocation
 *
 * @see CreateAllocation
 */
class CreateAllocationBuilder
{
    /**
     * @var CreateAllocation
     */
    private $instance;

    private function __construct(CreateAllocation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Allocation Builder object.
     *
     * @param float $quantity
     */
    public static function init(float $quantity): self
    {
        return new self(new CreateAllocation($quantity));
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
     * Sets price point id field.
     *
     * @param string|int|null $value
     */
    public function pricePointId($value): self
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
     * Sets billing schedule field.
     *
     * @param BillingSchedule|null $value
     */
    public function billingSchedule(?BillingSchedule $value): self
    {
        $this->instance->setBillingSchedule($value);
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
     * Initializes a new Create Allocation object.
     */
    public function build(): CreateAllocation
    {
        return CoreHelper::clone($this->instance);
    }
}
