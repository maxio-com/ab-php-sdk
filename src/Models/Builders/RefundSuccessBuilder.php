<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RefundSuccess;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundSuccess
 *
 * @see RefundSuccess
 */
class RefundSuccessBuilder
{
    /**
     * @var RefundSuccess
     */
    private $instance;

    private function __construct(RefundSuccess $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund success Builder object.
     */
    public static function init(int $refundId, int $gatewayTransactionId, int $productId): self
    {
        return new self(new RefundSuccess($refundId, $gatewayTransactionId, $productId));
    }

    /**
     * Initializes a new refund success object.
     */
    public function build(): RefundSuccess
    {
        return CoreHelper::clone($this->instance);
    }
}
