<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RefundPrepayment;
use AdvancedBillingLib\Models\RefundPrepaymentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundPrepaymentRequest
 *
 * @see RefundPrepaymentRequest
 */
class RefundPrepaymentRequestBuilder
{
    /**
     * @var RefundPrepaymentRequest
     */
    private $instance;

    private function __construct(RefundPrepaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund prepayment request Builder object.
     */
    public static function init(RefundPrepayment $refund): self
    {
        return new self(new RefundPrepaymentRequest($refund));
    }

    /**
     * Initializes a new refund prepayment request object.
     */
    public function build(): RefundPrepaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
