<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatedPaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatedPaymentProfile
 *
 * @see CreatedPaymentProfile
 */
class CreatedPaymentProfileBuilder
{
    /**
     * @var CreatedPaymentProfile
     */
    private $instance;

    private function __construct(CreatedPaymentProfile $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new created payment profile Builder object.
     */
    public static function init(): self
    {
        return new self(new CreatedPaymentProfile());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
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
     * Sets masked card number field.
     */
    public function maskedCardNumber(?string $value): self
    {
        $this->instance->setMaskedCardNumber($value);
        return $this;
    }

    /**
     * Unsets masked card number field.
     */
    public function unsetMaskedCardNumber(): self
    {
        $this->instance->unsetMaskedCardNumber();
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
     * Sets expiration month field.
     */
    public function expirationMonth(?int $value): self
    {
        $this->instance->setExpirationMonth($value);
        return $this;
    }

    /**
     * Sets expiration year field.
     */
    public function expirationYear(?int $value): self
    {
        $this->instance->setExpirationYear($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
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
     * Sets customer vault token field.
     */
    public function customerVaultToken(?string $value): self
    {
        $this->instance->setCustomerVaultToken($value);
        return $this;
    }

    /**
     * Unsets customer vault token field.
     */
    public function unsetCustomerVaultToken(): self
    {
        $this->instance->unsetCustomerVaultToken();
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
     * Unsets billing address 2 field.
     */
    public function unsetBillingAddress2(): self
    {
        $this->instance->unsetBillingAddress2();
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
     * Sets bank name field.
     */
    public function bankName(?string $value): self
    {
        $this->instance->setBankName($value);
        return $this;
    }

    /**
     * Sets masked bank routing number field.
     */
    public function maskedBankRoutingNumber(?string $value): self
    {
        $this->instance->setMaskedBankRoutingNumber($value);
        return $this;
    }

    /**
     * Sets masked bank account number field.
     */
    public function maskedBankAccountNumber(?string $value): self
    {
        $this->instance->setMaskedBankAccountNumber($value);
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
     * Sets verified field.
     */
    public function verified(?bool $value): self
    {
        $this->instance->setVerified($value);
        return $this;
    }

    /**
     * Sets site gateway setting id field.
     */
    public function siteGatewaySettingId(?int $value): self
    {
        $this->instance->setSiteGatewaySettingId($value);
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
     * Sets disabled field.
     */
    public function disabled(?bool $value): self
    {
        $this->instance->setDisabled($value);
        return $this;
    }

    /**
     * Initializes a new created payment profile object.
     */
    public function build(): CreatedPaymentProfile
    {
        return CoreHelper::clone($this->instance);
    }
}
