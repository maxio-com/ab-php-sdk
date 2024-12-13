<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodExternal;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodExternal
 *
 * @see PaymentMethodExternal
 */
class PaymentMethodExternalBuilder
{
    /**
     * @var PaymentMethodExternal
     */
    private $instance;

    private function __construct(PaymentMethodExternal $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Method External Builder object.
     *
     * @param string $kind
     * @param string $type
     */
    public static function init(string $kind, string $type): self
    {
        return new self(new PaymentMethodExternal($kind, $type));
    }

    /**
     * Sets details field.
     *
     * @param string|null $value
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
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
     * Initializes a new Payment Method External object.
     */
    public function build(): PaymentMethodExternal
    {
        return CoreHelper::clone($this->instance);
    }
}
