<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationSettings;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocationSettings
 *
 * @see AllocationSettings
 */
class AllocationSettingsBuilder
{
    /**
     * @var AllocationSettings
     */
    private $instance;

    private function __construct(AllocationSettings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new allocation settings Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocationSettings());
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
     * Sets accrue charge field.
     */
    public function accrueCharge(?bool $value): self
    {
        $this->instance->setAccrueCharge($value);
        return $this;
    }

    /**
     * Initializes a new allocation settings object.
     */
    public function build(): AllocationSettings
    {
        return CoreHelper::clone($this->instance);
    }
}
