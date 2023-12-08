<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReadPaymentProfileResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReadPaymentProfileResponse
 *
 * @see ReadPaymentProfileResponse
 */
class ReadPaymentProfileResponseBuilder
{
    /**
     * @var ReadPaymentProfileResponse
     */
    private $instance;

    private function __construct(ReadPaymentProfileResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new read payment profile response Builder object.
     */
    public static function init($paymentProfile): self
    {
        return new self(new ReadPaymentProfileResponse($paymentProfile));
    }

    /**
     * Initializes a new read payment profile response object.
     */
    public function build(): ReadPaymentProfileResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
