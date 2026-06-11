<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentProfile
 *
 * @see PaymentProfile
 */
class PaymentProfileBuilder
{
    /**
     * @var PaymentProfile
     */
    private $instance;

    private function __construct(PaymentProfile $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Profile Builder object.
     *
     * @param int $id
     */
    public static function init(int $id): self
    {
        return new self(new PaymentProfile($id));
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
     * Initializes a new Payment Profile object.
     */
    public function build(): PaymentProfile
    {
        return CoreHelper::clone($this->instance);
    }
}
