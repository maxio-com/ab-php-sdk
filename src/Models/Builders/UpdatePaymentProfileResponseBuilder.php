<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdatedPaymentProfile;
use AdvancedBillingLib\Models\UpdatePaymentProfileResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdatePaymentProfileResponse
 *
 * @see UpdatePaymentProfileResponse
 */
class UpdatePaymentProfileResponseBuilder
{
    /**
     * @var UpdatePaymentProfileResponse
     */
    private $instance;

    private function __construct(UpdatePaymentProfileResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update payment profile response Builder object.
     */
    public static function init(UpdatedPaymentProfile $paymentProfile): self
    {
        return new self(new UpdatePaymentProfileResponse($paymentProfile));
    }

    /**
     * Initializes a new update payment profile response object.
     */
    public function build(): UpdatePaymentProfileResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
