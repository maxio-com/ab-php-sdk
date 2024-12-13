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
     * Initializes a new Account Balance Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountBalance());
    }

    /**
     * Sets balance in cents field.
     *
     * @param int|null $value
     */
    public function balanceInCents(?int $value): self
    {
        $this->instance->setBalanceInCents($value);
        return $this;
    }

    /**
     * Sets automatic balance in cents field.
     *
     * @param int|null $value
     */
    public function automaticBalanceInCents(?int $value): self
    {
        $this->instance->setAutomaticBalanceInCents($value);
        return $this;
    }

    /**
     * Unsets automatic balance in cents field.
     */
    public function unsetAutomaticBalanceInCents(): self
    {
        $this->instance->unsetAutomaticBalanceInCents();
        return $this;
    }

    /**
     * Sets remittance balance in cents field.
     *
     * @param int|null $value
     */
    public function remittanceBalanceInCents(?int $value): self
    {
        $this->instance->setRemittanceBalanceInCents($value);
        return $this;
    }

    /**
     * Unsets remittance balance in cents field.
     */
    public function unsetRemittanceBalanceInCents(): self
    {
        $this->instance->unsetRemittanceBalanceInCents();
        return $this;
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
     * Initializes a new Account Balance object.
     */
    public function build(): AccountBalance
    {
        return CoreHelper::clone($this->instance);
    }
}
