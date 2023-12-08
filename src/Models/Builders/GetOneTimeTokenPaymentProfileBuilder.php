<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\GetOneTimeTokenPaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model GetOneTimeTokenPaymentProfile
 *
 * @see GetOneTimeTokenPaymentProfile
 */
class GetOneTimeTokenPaymentProfileBuilder
{
    /**
     * @var GetOneTimeTokenPaymentProfile
     */
    private $instance;

    private function __construct(GetOneTimeTokenPaymentProfile $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get one time token payment profile Builder object.
     */
    public static function init(
        string $firstName,
        string $lastName,
        string $maskedCardNumber,
        string $cardType,
        float $expirationMonth,
        float $expirationYear,
        string $currentVault,
        string $vaultToken,
        string $billingAddress,
        string $billingCity,
        string $billingCountry,
        string $billingState,
        string $billingZip,
        string $paymentType,
        bool $disabled,
        int $siteGatewaySettingId
    ): self {
        return new self(new GetOneTimeTokenPaymentProfile(
            $firstName,
            $lastName,
            $maskedCardNumber,
            $cardType,
            $expirationMonth,
            $expirationYear,
            $currentVault,
            $vaultToken,
            $billingAddress,
            $billingCity,
            $billingCountry,
            $billingState,
            $billingZip,
            $paymentType,
            $disabled,
            $siteGatewaySettingId
        ));
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?string $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Unsets customer id field.
     */
    public function unsetCustomerId(): self
    {
        $this->instance->unsetCustomerId();
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
     * Initializes a new get one time token payment profile object.
     */
    public function build(): GetOneTimeTokenPaymentProfile
    {
        return CoreHelper::clone($this->instance);
    }
}
