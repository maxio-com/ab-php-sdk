<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatedPaymentProfile;
use AdvancedBillingLib\Models\CreatePaymentProfileResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePaymentProfileResponse
 *
 * @see CreatePaymentProfileResponse
 */
class CreatePaymentProfileResponseBuilder
{
    /**
     * @var CreatePaymentProfileResponse
     */
    private $instance;

    private function __construct(CreatePaymentProfileResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create payment profile response Builder object.
     */
    public static function init(CreatedPaymentProfile $paymentProfile): self
    {
        return new self(new CreatePaymentProfileResponse($paymentProfile));
    }

    /**
     * Initializes a new create payment profile response object.
     */
    public function build(): CreatePaymentProfileResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
