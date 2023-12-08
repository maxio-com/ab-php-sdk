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
     * Initializes a new update payment profile request Builder object.
     */
    public static function init(UpdatePaymentProfile $paymentProfile): self
    {
        return new self(new UpdatePaymentProfileRequest($paymentProfile));
    }

    /**
     * Initializes a new update payment profile request object.
     */
    public function build(): UpdatePaymentProfileRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
