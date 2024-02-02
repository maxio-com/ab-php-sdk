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
     * Initializes a new payment method bank account Builder object.
     */
    public static function init(string $maskedAccountNumber, string $maskedRoutingNumber, string $type): self
    {
        return new self(new PaymentMethodBankAccount($maskedAccountNumber, $maskedRoutingNumber, $type));
    }

    /**
     * Initializes a new payment method bank account object.
     */
    public function build(): PaymentMethodBankAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
