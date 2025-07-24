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
     * Initializes a new Subscription Group Credit Card Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupCreditCard());
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
     * Sets vault token field.
     *
     * @param string|null $value
     */
    public function vaultToken(?string $value): self
    {
        $this->instance->setVaultToken($value);
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
     * Sets first name field.
     *
     * @param string|null $value
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets last name field.
     *
     * @param string|null $value
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
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
     * Sets billing address 2 field.
     *
     * @param string|null $value
     */
    public function billingAddress2(?string $value): self
    {
        $this->instance->setBillingAddress2($value);
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
     * Sets full number field.
     *
     * @param string|int|null $value
     */
    public function fullNumber($value): self
    {
        $this->instance->setFullNumber($value);
        return $this;
    }

    /**
     * Sets expiration month field.
     *
     * @param string|int|null $value
     */
    public function expirationMonth($value): self
    {
        $this->instance->setExpirationMonth($value);
        return $this;
    }

    /**
     * Sets expiration year field.
     *
     * @param string|int|null $value
     */
    public function expirationYear($value): self
    {
        $this->instance->setExpirationYear($value);
        return $this;
    }

    /**
     * Sets last four field.
     *
     * @param string|null $value
     */
    public function lastFour(?string $value): self
    {
        $this->instance->setLastFour($value);
        return $this;
    }

    /**
     * Sets card type field.
     *
     * @param string|null $value
     */
    public function cardType(?string $value): self
    {
        $this->instance->setCardType($value);
        return $this;
    }

    /**
     * Sets customer vault token field.
     *
     * @param string|null $value
     */
    public function customerVaultToken(?string $value): self
    {
        $this->instance->setCustomerVaultToken($value);
        return $this;
    }

    /**
     * Sets cvv field.
     *
     * @param string|null $value
     */
    public function cvv(?string $value): self
    {
        $this->instance->setCvv($value);
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
     * Initializes a new Subscription Group Credit Card object.
     */
    public function build(): SubscriptionGroupCreditCard
    {
        return CoreHelper::clone($this->instance);
    }
}
