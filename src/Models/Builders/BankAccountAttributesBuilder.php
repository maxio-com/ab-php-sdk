<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BankAccountAttributes;
use Core\Utils\CoreHelper;

/**
 * Builder for model BankAccountAttributes
 *
 * @see BankAccountAttributes
 */
class BankAccountAttributesBuilder
{
    /**
     * @var BankAccountAttributes
     */
    private $instance;

    private function __construct(BankAccountAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bank account attributes Builder object.
     */
    public static function init(): self
    {
        return new self(new BankAccountAttributes());
    }

    /**
     * Sets chargify token field.
     */
    public function chargifyToken(?string $value): self
    {
        $this->instance->setChargifyToken($value);
        return $this;
    }

    /**
     * Sets bank name field.
     */
    public function bankName(?string $value): self
    {
        $this->instance->setBankName($value);
        return $this;
    }

    /**
     * Sets bank routing number field.
     */
    public function bankRoutingNumber(?string $value): self
    {
        $this->instance->setBankRoutingNumber($value);
        return $this;
    }

    /**
     * Sets bank account number field.
     */
    public function bankAccountNumber(?string $value): self
    {
        $this->instance->setBankAccountNumber($value);
        return $this;
    }

    /**
     * Sets bank account type field.
     */
    public function bankAccountType(?string $value): self
    {
        $this->instance->setBankAccountType($value);
        return $this;
    }

    /**
     * Sets bank branch code field.
     */
    public function bankBranchCode(?string $value): self
    {
        $this->instance->setBankBranchCode($value);
        return $this;
    }

    /**
     * Sets bank iban field.
     */
    public function bankIban(?string $value): self
    {
        $this->instance->setBankIban($value);
        return $this;
    }

    /**
     * Sets bank account holder type field.
     */
    public function bankAccountHolderType(?string $value): self
    {
        $this->instance->setBankAccountHolderType($value);
        return $this;
    }

    /**
     * Sets payment type field.
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Sets current vault field.
     */
    public function currentVault(?string $value): self
    {
        $this->instance->setCurrentVault($value);
        return $this;
    }

    /**
     * Sets vault token field.
     */
    public function vaultToken(?string $value): self
    {
        $this->instance->setVaultToken($value);
        return $this;
    }

    /**
     * Sets customer vault token field.
     */
    public function customerVaultToken(?string $value): self
    {
        $this->instance->setCustomerVaultToken($value);
        return $this;
    }

    /**
     * Initializes a new bank account attributes object.
     */
    public function build(): BankAccountAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
