<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditCardPaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreditCardPaymentProfile
 *
 * @see CreditCardPaymentProfile
 */
class CreditCardPaymentProfileBuilder
{
    /**
     * @var CreditCardPaymentProfile
     */
    private $instance;

    private function __construct(CreditCardPaymentProfile $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new credit card payment profile Builder object.
     */
    public static function init(string $maskedCardNumber): self
    {
        return new self(new CreditCardPaymentProfile($maskedCardNumber));
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
     * Unsets vault token field.
     */
    public function unsetVaultToken(): self
    {
        $this->instance->unsetVaultToken();
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
     * Unsets billing address field.
     */
    public function unsetBillingAddress(): self
    {
        $this->instance->unsetBillingAddress();
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
     * Unsets billing city field.
     */
    public function unsetBillingCity(): self
    {
        $this->instance->unsetBillingCity();
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
     * Unsets billing state field.
     */
    public function unsetBillingState(): self
    {
        $this->instance->unsetBillingState();
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
     * Unsets billing zip field.
     */
    public function unsetBillingZip(): self
    {
        $this->instance->unsetBillingZip();
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
     * Unsets billing country field.
     */
    public function unsetBillingCountry(): self
    {
        $this->instance->unsetBillingCountry();
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
     * Sets disabled field.
     */
    public function disabled(?bool $value): self
    {
        $this->instance->setDisabled($value);
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
     * Sets site gateway setting id field.
     */
    public function siteGatewaySettingId(?int $value): self
    {
        $this->instance->setSiteGatewaySettingId($value);
        return $this;
    }

    /**
     * Unsets site gateway setting id field.
     */
    public function unsetSiteGatewaySettingId(): self
    {
        $this->instance->unsetSiteGatewaySettingId();
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
     * Unsets gateway handle field.
     */
    public function unsetGatewayHandle(): self
    {
        $this->instance->unsetGatewayHandle();
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new credit card payment profile object.
     */
    public function build(): CreditCardPaymentProfile
    {
        return CoreHelper::clone($this->instance);
    }
}
