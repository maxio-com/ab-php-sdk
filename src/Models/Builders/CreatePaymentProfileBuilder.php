<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePaymentProfile
 *
 * @see CreatePaymentProfile
 */
class CreatePaymentProfileBuilder
{
    /**
     * @var CreatePaymentProfile
     */
    private $instance;

    private function __construct(CreatePaymentProfile $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Payment Profile Builder object.
     */
    public static function init(): self
    {
        return new self(new CreatePaymentProfile());
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
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
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
     * Sets masked card number field.
     *
     * @param string|null $value
     */
    public function maskedCardNumber(?string $value): self
    {
        $this->instance->setMaskedCardNumber($value);
        return $this;
    }

    /**
     * Sets full number field.
     *
     * @param string|null $value
     */
    public function fullNumber(?string $value): self
    {
        $this->instance->setFullNumber($value);
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
     * Sets expiration month field.
     *
     * @param int|string|null $value
     */
    public function expirationMonth($value): self
    {
        $this->instance->setExpirationMonth($value);
        return $this;
    }

    /**
     * Sets expiration year field.
     *
     * @param int|string|null $value
     */
    public function expirationYear($value): self
    {
        $this->instance->setExpirationYear($value);
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
     * Unsets billing address 2 field.
     */
    public function unsetBillingAddress2(): self
    {
        $this->instance->unsetBillingAddress2();
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
     * Sets customer id field.
     *
     * @param int|null $value
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets paypal email field.
     *
     * @param string|null $value
     */
    public function paypalEmail(?string $value): self
    {
        $this->instance->setPaypalEmail($value);
        return $this;
    }

    /**
     * Sets payment method nonce field.
     *
     * @param string|null $value
     */
    public function paymentMethodNonce(?string $value): self
    {
        $this->instance->setPaymentMethodNonce($value);
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
     * Initializes a new Create Payment Profile object.
     */
    public function build(): CreatePaymentProfile
    {
        return CoreHelper::clone($this->instance);
    }
}
