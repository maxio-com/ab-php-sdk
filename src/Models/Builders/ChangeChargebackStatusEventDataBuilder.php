<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChangeChargebackStatusEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChangeChargebackStatusEventData
 *
 * @see ChangeChargebackStatusEventData
 */
class ChangeChargebackStatusEventDataBuilder
{
    /**
     * @var ChangeChargebackStatusEventData
     */
    private $instance;

    private function __construct(ChangeChargebackStatusEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change chargeback status event data Builder object.
     */
    public static function init(string $chargebackStatus): self
    {
        return new self(new ChangeChargebackStatusEventData($chargebackStatus));
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
     * Initializes a new change chargeback status event data object.
     */
    public function build(): ChangeChargebackStatusEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
