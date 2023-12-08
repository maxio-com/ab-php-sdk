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
     * Initializes a new create payment profile request Builder object.
     */
    public static function init(CreatePaymentProfile $paymentProfile): self
    {
        return new self(new CreatePaymentProfileRequest($paymentProfile));
    }

    /**
     * Initializes a new create payment profile request object.
     */
    public function build(): CreatePaymentProfileRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
