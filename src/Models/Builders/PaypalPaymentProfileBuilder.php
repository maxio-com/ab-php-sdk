<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaypalPaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaypalPaymentProfile
 *
 * @see PaypalPaymentProfile
 */
class PaypalPaymentProfileBuilder
{
    /**
     * @var PaypalPaymentProfile
     */
    private $instance;

    private function __construct(PaypalPaymentProfile $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Paypal Payment Profile Builder object.
     *
     * @param string $paymentType
     */
    public static function init(string $paymentType): self
    {
        return new self(new PaypalPaymentProfile($paymentType));
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
     * Unsets billing address field.
     */
    public function unsetBillingAddress(): self
    {
        $this->instance->unsetBillingAddress();
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
     * Unsets billing city field.
     */
    public function unsetBillingCity(): self
    {
        $this->instance->unsetBillingCity();
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
     * Unsets billing state field.
     */
    public function unsetBillingState(): self
    {
        $this->instance->unsetBillingState();
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
     * Unsets billing zip field.
     */
    public function unsetBillingZip(): self
    {
        $this->instance->unsetBillingZip();
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
     * Unsets billing country field.
     */
    public function unsetBillingCountry(): self
    {
        $this->instance->unsetBillingCountry();
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
     * Unsets customer vault token field.
     */
    public function unsetCustomerVaultToken(): self
    {
        $this->instance->unsetCustomerVaultToken();
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
     * Sets site gateway setting id field.
     *
     * @param int|null $value
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
     *
     * @param string|null $value
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
     * Initializes a new Paypal Payment Profile object.
     */
    public function build(): PaypalPaymentProfile
    {
        return CoreHelper::clone($this->instance);
    }
}
