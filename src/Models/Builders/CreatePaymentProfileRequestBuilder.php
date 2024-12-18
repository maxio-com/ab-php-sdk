<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePaymentProfile;
use AdvancedBillingLib\Models\CreatePaymentProfileRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePaymentProfileRequest
 *
 * @see CreatePaymentProfileRequest
 */
class CreatePaymentProfileRequestBuilder
{
    /**
     * @var CreatePaymentProfileRequest
     */
    private $instance;

    private function __construct(CreatePaymentProfileRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Payment Profile Request Builder object.
     *
     * @param CreatePaymentProfile $paymentProfile
     */
    public static function init(CreatePaymentProfile $paymentProfile): self
    {
        return new self(new CreatePaymentProfileRequest($paymentProfile));
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
     * Initializes a new Create Payment Profile Request object.
     */
    public function build(): CreatePaymentProfileRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
