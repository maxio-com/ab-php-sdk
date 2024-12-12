<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodBankAccount;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodBankAccount
 *
 * @see PaymentMethodBankAccount
 */
class PaymentMethodBankAccountBuilder
{
    /**
     * @var PaymentMethodBankAccount
     */
    private $instance;

    private function __construct(PaymentMethodBankAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Method Bank Account Builder object.
     *
     * @param string $maskedAccountNumber
     * @param string $maskedRoutingNumber
     * @param string $type
     */
    public static function init(string $maskedAccountNumber, string $maskedRoutingNumber, string $type): self
    {
        return new self(new PaymentMethodBankAccount($maskedAccountNumber, $maskedRoutingNumber, $type));
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
     * Initializes a new Payment Method Bank Account object.
     */
    public function build(): PaymentMethodBankAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
