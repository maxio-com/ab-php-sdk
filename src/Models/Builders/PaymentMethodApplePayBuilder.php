<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodApplePay;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodApplePay
 *
 * @see PaymentMethodApplePay
 */
class PaymentMethodApplePayBuilder
{
    /**
     * @var PaymentMethodApplePay
     */
    private $instance;

    private function __construct(PaymentMethodApplePay $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method apple pay Builder object.
     */
    public static function init(string $type): self
    {
        return new self(new PaymentMethodApplePay($type));
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
     * Initializes a new payment method apple pay object.
     */
    public function build(): PaymentMethodApplePay
    {
        return CoreHelper::clone($this->instance);
    }
}
