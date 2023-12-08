<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BaseRefundError;
use AdvancedBillingLib\Models\RefundPrepaymentBaseRefundError;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundPrepaymentBaseRefundError
 *
 * @see RefundPrepaymentBaseRefundError
 */
class RefundPrepaymentBaseRefundErrorBuilder
{
    /**
     * @var RefundPrepaymentBaseRefundError
     */
    private $instance;

    private function __construct(RefundPrepaymentBaseRefundError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund prepayment base refund error Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundPrepaymentBaseRefundError());
    }

    /**
     * Sets refund field.
     */
    public function refund(?BaseRefundError $value): self
    {
        $this->instance->setRefund($value);
        return $this;
    }

    /**
     * Initializes a new refund prepayment base refund error object.
     */
    public function build(): RefundPrepaymentBaseRefundError
    {
        return CoreHelper::clone($this->instance);
    }
}
