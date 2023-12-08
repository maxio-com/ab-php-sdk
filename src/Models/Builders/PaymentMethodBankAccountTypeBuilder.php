<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodBankAccountType;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentMethodBankAccountType
 *
 * @see PaymentMethodBankAccountType
 */
class PaymentMethodBankAccountTypeBuilder
{
    /**
     * @var PaymentMethodBankAccountType
     */
    private $instance;

    private function __construct(PaymentMethodBankAccountType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment method bank account type Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentMethodBankAccountType());
    }

    /**
     * Sets masked account number field.
     */
    public function maskedAccountNumber(?string $value): self
    {
        $this->instance->setMaskedAccountNumber($value);
        return $this;
    }

    /**
     * Sets masked routing number field.
     */
    public function maskedRoutingNumber(?string $value): self
    {
        $this->instance->setMaskedRoutingNumber($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new payment method bank account type object.
     */
    public function build(): PaymentMethodBankAccountType
    {
        return CoreHelper::clone($this->instance);
    }
}
