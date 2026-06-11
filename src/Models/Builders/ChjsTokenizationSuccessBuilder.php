<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChjsTokenizationSuccess;
use AdvancedBillingLib\Models\PaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChjsTokenizationSuccess
 *
 * @see ChjsTokenizationSuccess
 */
class ChjsTokenizationSuccessBuilder
{
    /**
     * @var ChjsTokenizationSuccess
     */
    private $instance;

    private function __construct(ChjsTokenizationSuccess $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Chjs Tokenization Success Builder object.
     *
     * @param PaymentProfile $paymentProfile
     */
    public static function init(PaymentProfile $paymentProfile): self
    {
        return new self(new ChjsTokenizationSuccess($paymentProfile));
    }

    /**
     * Sets gateway customer id field.
     *
     * @param int|null $value
     */
    public function gatewayCustomerId(?int $value): self
    {
        $this->instance->setGatewayCustomerId($value);
        return $this;
    }

    /**
     * Unsets gateway customer id field.
     */
    public function unsetGatewayCustomerId(): self
    {
        $this->instance->unsetGatewayCustomerId();
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
     * Initializes a new Chjs Tokenization Success object.
     */
    public function build(): ChjsTokenizationSuccess
    {
        return CoreHelper::clone($this->instance);
    }
}
