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
     * Initializes a new create allocation Builder object.
     */
    public static function init(float $quantity): self
    {
        return new self(new CreateAllocation($quantity));
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
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
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
     * Sets proration upgrade scheme field.
     */
    public function prorationUpgradeScheme(?string $value): self
    {
        $this->instance->setProrationUpgradeScheme($value);
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
     * Sets initiate dunning field.
     */
    public function initiateDunning(?bool $value): self
    {
        $this->instance->setInitiateDunning($value);
        return $this;
    }

    /**
     * Sets price point id field.
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
     */
    public function billingSchedule(?BillingSchedule $value): self
    {
        $this->instance->setBillingSchedule($value);
        return $this;
    }

    /**
     * Initializes a new create allocation object.
     */
    public function build(): CreateAllocation
    {
        return CoreHelper::clone($this->instance);
    }
}
