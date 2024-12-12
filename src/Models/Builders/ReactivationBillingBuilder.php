<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReactivationBilling;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReactivationBilling
 *
 * @see ReactivationBilling
 */
class ReactivationBillingBuilder
{
    /**
     * @var ReactivationBilling
     */
    private $instance;

    private function __construct(ReactivationBilling $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Reactivation Billing Builder object.
     */
    public static function init(): self
    {
        return new self(new ReactivationBilling());
    }

    /**
     * Sets reactivation charge field.
     *
     * @param string|null $value
     */
    public function reactivationCharge(?string $value): self
    {
        $this->instance->setReactivationCharge($value);
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
     * Initializes a new Reactivation Billing object.
     */
    public function build(): ReactivationBilling
    {
        return CoreHelper::clone($this->instance);
    }
}
