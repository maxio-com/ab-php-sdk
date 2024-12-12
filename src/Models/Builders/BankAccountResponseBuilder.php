<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BankAccountPaymentProfile;
use AdvancedBillingLib\Models\BankAccountResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model BankAccountResponse
 *
 * @see BankAccountResponse
 */
class BankAccountResponseBuilder
{
    /**
     * @var BankAccountResponse
     */
    private $instance;

    private function __construct(BankAccountResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Account Response Builder object.
     *
     * @param BankAccountPaymentProfile $paymentProfile
     */
    public static function init(BankAccountPaymentProfile $paymentProfile): self
    {
        return new self(new BankAccountResponse($paymentProfile));
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
     * Initializes a new Bank Account Response object.
     */
    public function build(): BankAccountResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
