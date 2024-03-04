<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodPaypal;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodPaypal
 *
 * @see PaymentMethodPaypal
 */
class PaymentMethodPaypalBuilder
{
    /**
     * @var PaymentMethodPaypal
     */
    private $instance;

    private function __construct(PaymentMethodPaypal $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method paypal Builder object.
     */
    public static function init(string $email, string $type): self
    {
        return new self(new PaymentMethodPaypal($email, $type));
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
     * Initializes a new payment method paypal object.
     */
    public function build(): PaymentMethodPaypal
    {
        return CoreHelper::clone($this->instance);
    }
}
