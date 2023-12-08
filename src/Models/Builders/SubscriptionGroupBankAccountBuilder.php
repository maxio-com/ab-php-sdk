<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupBankAccount;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupBankAccount
 *
 * @see SubscriptionGroupBankAccount
 */
class SubscriptionGroupBankAccountBuilder
{
    /**
     * @var SubscriptionGroupBankAccount
     */
    private $instance;

    private function __construct(SubscriptionGroupBankAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group bank account Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupBankAccount());
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
     * Sets bank account number field.
     */
    public function bankAccountNumber(?string $value): self
    {
        $this->instance->setBankAccountNumber($value);
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
     * Sets bank iban field.
     */
    public function bankIban(?string $value): self
    {
        $this->instance->setBankIban($value);
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
     * Sets bank account type field.
     */
    public function bankAccountType(?string $value): self
    {
        $this->instance->setBankAccountType($value);
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
     * Sets billing address field.
     */
    public function billingAddress(?string $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets billing city field.
     */
    public function billingCity(?string $value): self
    {
        $this->instance->setBillingCity($value);
        return $this;
    }

    /**
     * Sets billing state field.
     */
    public function billingState(?string $value): self
    {
        $this->instance->setBillingState($value);
        return $this;
    }

    /**
     * Sets billing zip field.
     */
    public function billingZip(?string $value): self
    {
        $this->instance->setBillingZip($value);
        return $this;
    }

    /**
     * Sets billing country field.
     */
    public function billingCountry(?string $value): self
    {
        $this->instance->setBillingCountry($value);
        return $this;
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
     * Sets current vault field.
     */
    public function currentVault(?string $value): self
    {
        $this->instance->setCurrentVault($value);
        return $this;
    }

    /**
     * Sets gateway handle field.
     */
    public function gatewayHandle(?string $value): self
    {
        $this->instance->setGatewayHandle($value);
        return $this;
    }

    /**
     * Initializes a new subscription group bank account object.
     */
    public function build(): SubscriptionGroupBankAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
