<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentProfile;
use AdvancedBillingLib\Models\PaymentProfileResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentProfileResponse
 *
 * @see PaymentProfileResponse
 */
class PaymentProfileResponseBuilder
{
    /**
     * @var PaymentProfileResponse
     */
    private $instance;

    private function __construct(PaymentProfileResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment profile response Builder object.
     */
    public static function init(PaymentProfile $paymentProfile): self
    {
        return new self(new PaymentProfileResponse($paymentProfile));
    }

    /**
     * Initializes a new payment profile response object.
     */
    public function build(): PaymentProfileResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
