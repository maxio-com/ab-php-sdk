<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BankAccountVerification;
use AdvancedBillingLib\Models\BankAccountVerificationRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model BankAccountVerificationRequest
 *
 * @see BankAccountVerificationRequest
 */
class BankAccountVerificationRequestBuilder
{
    /**
     * @var BankAccountVerificationRequest
     */
    private $instance;

    private function __construct(BankAccountVerificationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bank account verification request Builder object.
     */
    public static function init(BankAccountVerification $bankAccountVerification): self
    {
        return new self(new BankAccountVerificationRequest($bankAccountVerification));
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
     * Initializes a new bank account verification request object.
     */
    public function build(): BankAccountVerificationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
