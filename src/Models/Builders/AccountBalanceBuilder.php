<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AccountBalance;
use Core\Utils\CoreHelper;

/**
 * Builder for model AccountBalance
 *
 * @see AccountBalance
 */
class AccountBalanceBuilder
{
    /**
     * @var AccountBalance
     */
    private $instance;

    private function __construct(AccountBalance $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account balance Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountBalance());
    }

    /**
     * Sets balance in cents field.
     */
    public function balanceInCents(?int $value): self
    {
        $this->instance->setBalanceInCents($value);
        return $this;
    }

    /**
     * Initializes a new account balance object.
     */
    public function build(): AccountBalance
    {
        return CoreHelper::clone($this->instance);
    }
}
