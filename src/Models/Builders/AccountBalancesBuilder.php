<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AccountBalance;
use AdvancedBillingLib\Models\AccountBalances;
use Core\Utils\CoreHelper;

/**
 * Builder for model AccountBalances
 *
 * @see AccountBalances
 */
class AccountBalancesBuilder
{
    /**
     * @var AccountBalances
     */
    private $instance;

    private function __construct(AccountBalances $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account balances Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountBalances());
    }

    /**
     * Sets open invoices field.
     */
    public function openInvoices(?AccountBalance $value): self
    {
        $this->instance->setOpenInvoices($value);
        return $this;
    }

    /**
     * Sets pending discounts field.
     */
    public function pendingDiscounts(?AccountBalance $value): self
    {
        $this->instance->setPendingDiscounts($value);
        return $this;
    }

    /**
     * Sets service credits field.
     */
    public function serviceCredits(?AccountBalance $value): self
    {
        $this->instance->setServiceCredits($value);
        return $this;
    }

    /**
     * Sets prepayments field.
     */
    public function prepayments(?AccountBalance $value): self
    {
        $this->instance->setPrepayments($value);
        return $this;
    }

    /**
     * Initializes a new account balances object.
     */
    public function build(): AccountBalances
    {
        return CoreHelper::clone($this->instance);
    }
}
