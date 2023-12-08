<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePayment;
use AdvancedBillingLib\Models\RecordPaymentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model RecordPaymentRequest
 *
 * @see RecordPaymentRequest
 */
class RecordPaymentRequestBuilder
{
    /**
     * @var RecordPaymentRequest
     */
    private $instance;

    private function __construct(RecordPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new record payment request Builder object.
     */
    public static function init(CreatePayment $payment): self
    {
        return new self(new RecordPaymentRequest($payment));
    }

    /**
     * Initializes a new record payment request object.
     */
    public function build(): RecordPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
