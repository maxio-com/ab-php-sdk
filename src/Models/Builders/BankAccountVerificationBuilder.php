<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BankAccountVerification;
use Core\Utils\CoreHelper;

/**
 * Builder for model BankAccountVerification
 *
 * @see BankAccountVerification
 */
class BankAccountVerificationBuilder
{
    /**
     * @var BankAccountVerification
     */
    private $instance;

    private function __construct(BankAccountVerification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bank account verification Builder object.
     */
    public static function init(): self
    {
        return new self(new BankAccountVerification());
    }

    /**
     * Sets deposit 1 in cents field.
     */
    public function deposit1InCents(?int $value): self
    {
        $this->instance->setDeposit1InCents($value);
        return $this;
    }

    /**
     * Sets deposit 2 in cents field.
     */
    public function deposit2InCents(?int $value): self
    {
        $this->instance->setDeposit2InCents($value);
        return $this;
    }

    /**
     * Initializes a new bank account verification object.
     */
    public function build(): BankAccountVerification
    {
        return CoreHelper::clone($this->instance);
    }
}
