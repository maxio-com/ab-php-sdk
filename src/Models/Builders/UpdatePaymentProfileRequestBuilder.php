<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdatePaymentProfile;
use AdvancedBillingLib\Models\UpdatePaymentProfileRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdatePaymentProfileRequest
 *
 * @see UpdatePaymentProfileRequest
 */
class UpdatePaymentProfileRequestBuilder
{
    /**
     * @var UpdatePaymentProfileRequest
     */
    private $instance;

    private function __construct(UpdatePaymentProfileRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Payment Profile Request Builder object.
     *
     * @param UpdatePaymentProfile $paymentProfile
     */
    public static function init(UpdatePaymentProfile $paymentProfile): self
    {
        return new self(new UpdatePaymentProfileRequest($paymentProfile));
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
     * Initializes a new Update Payment Profile Request object.
     */
    public function build(): UpdatePaymentProfileRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
