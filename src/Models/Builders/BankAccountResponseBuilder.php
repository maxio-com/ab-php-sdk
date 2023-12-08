<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BankAccount;
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
     * Initializes a new bank account response Builder object.
     */
    public static function init(BankAccount $paymentProfile): self
    {
        return new self(new BankAccountResponse($paymentProfile));
    }

    /**
     * Initializes a new bank account response object.
     */
    public function build(): BankAccountResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
