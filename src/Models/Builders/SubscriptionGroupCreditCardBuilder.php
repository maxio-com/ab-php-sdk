<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupCreditCard;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupCreditCard
 *
 * @see SubscriptionGroupCreditCard
 */
class SubscriptionGroupCreditCardBuilder
{
    /**
     * @var SubscriptionGroupCreditCard
     */
    private $instance;

    private function __construct(SubscriptionGroupCreditCard $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group credit card Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupCreditCard());
    }

    /**
     * Sets full number field.
     */
    public function fullNumber($value): self
    {
        $this->instance->setFullNumber($value);
        return $this;
    }

    /**
     * Sets expiration month field.
     */
    public function expirationMonth($value): self
    {
        $this->instance->setExpirationMonth($value);
        return $this;
    }

    /**
     * Sets expiration year field.
     */
    public function expirationYear($value): self
    {
        $this->instance->setExpirationYear($value);
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
     * Sets vault token field.
     */
    public function vaultToken(?string $value): self
    {
        $this->instance->setVaultToken($value);
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
     * Sets first name field.
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
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
     * Sets billing address 2 field.
     */
    public function billingAddress2(?string $value): self
    {
        $this->instance->setBillingAddress2($value);
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
     * Sets last four field.
     */
    public function lastFour(?string $value): self
    {
        $this->instance->setLastFour($value);
        return $this;
    }

    /**
     * Sets card type field.
     */
    public function cardType(?string $value): self
    {
        $this->instance->setCardType($value);
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
     * Sets cvv field.
     */
    public function cvv(?string $value): self
    {
        $this->instance->setCvv($value);
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
     * Initializes a new subscription group credit card object.
     */
    public function build(): SubscriptionGroupCreditCard
    {
        return CoreHelper::clone($this->instance);
    }
}
