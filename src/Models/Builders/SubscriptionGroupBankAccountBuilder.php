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
     * Initializes a new Subscription Group Bank Account Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupBankAccount());
    }

    /**
     * Sets bank name field.
     *
     * @param string|null $value
     */
    public function bankName(?string $value): self
    {
        $this->instance->setBankName($value);
        return $this;
    }

    /**
     * Sets bank account number field.
     *
     * @param string|null $value
     */
    public function bankAccountNumber(?string $value): self
    {
        $this->instance->setBankAccountNumber($value);
        return $this;
    }

    /**
     * Sets bank routing number field.
     *
     * @param string|null $value
     */
    public function bankRoutingNumber(?string $value): self
    {
        $this->instance->setBankRoutingNumber($value);
        return $this;
    }

    /**
     * Sets bank iban field.
     *
     * @param string|null $value
     */
    public function bankIban(?string $value): self
    {
        $this->instance->setBankIban($value);
        return $this;
    }

    /**
     * Sets bank branch code field.
     *
     * @param string|null $value
     */
    public function bankBranchCode(?string $value): self
    {
        $this->instance->setBankBranchCode($value);
        return $this;
    }

    /**
     * Sets bank account type field.
     *
     * @param string|null $value
     */
    public function bankAccountType(?string $value): self
    {
        $this->instance->setBankAccountType($value);
        return $this;
    }

    /**
     * Sets bank account holder type field.
     *
     * @param string|null $value
     */
    public function bankAccountHolderType(?string $value): self
    {
        $this->instance->setBankAccountHolderType($value);
        return $this;
    }

    /**
     * Sets payment type field.
     *
     * @param string|null $value
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Sets billing address field.
     *
     * @param string|null $value
     */
    public function billingAddress(?string $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets billing city field.
     *
     * @param string|null $value
     */
    public function billingCity(?string $value): self
    {
        $this->instance->setBillingCity($value);
        return $this;
    }

    /**
     * Sets billing state field.
     *
     * @param string|null $value
     */
    public function billingState(?string $value): self
    {
        $this->instance->setBillingState($value);
        return $this;
    }

    /**
     * Sets billing zip field.
     *
     * @param string|null $value
     */
    public function billingZip(?string $value): self
    {
        $this->instance->setBillingZip($value);
        return $this;
    }

    /**
     * Sets billing country field.
     *
     * @param string|null $value
     */
    public function billingCountry(?string $value): self
    {
        $this->instance->setBillingCountry($value);
        return $this;
    }

    /**
     * Sets chargify token field.
     *
     * @param string|null $value
     */
    public function chargifyToken(?string $value): self
    {
        $this->instance->setChargifyToken($value);
        return $this;
    }

    /**
     * Sets current vault field.
     *
     * @param string|null $value
     */
    public function currentVault(?string $value): self
    {
        $this->instance->setCurrentVault($value);
        return $this;
    }

    /**
     * Sets gateway handle field.
     *
     * @param string|null $value
     */
    public function gatewayHandle(?string $value): self
    {
        $this->instance->setGatewayHandle($value);
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
     * Initializes a new Subscription Group Bank Account object.
     */
    public function build(): SubscriptionGroupBankAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
