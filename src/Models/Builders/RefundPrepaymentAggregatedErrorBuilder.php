<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaymentAggregatedError;
use AdvancedBillingLib\Models\RefundPrepaymentAggregatedError;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundPrepaymentAggregatedError
 *
 * @see RefundPrepaymentAggregatedError
 */
class RefundPrepaymentAggregatedErrorBuilder
{
    /**
     * @var RefundPrepaymentAggregatedError
     */
    private $instance;

    private function __construct(RefundPrepaymentAggregatedError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund prepayment aggregated error Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundPrepaymentAggregatedError());
    }

    /**
     * Sets refund field.
     */
    public function refund(?PrepaymentAggregatedError $value): self
    {
        $this->instance->setRefund($value);
        return $this;
    }

    /**
     * Initializes a new refund prepayment aggregated error object.
     */
    public function build(): RefundPrepaymentAggregatedError
    {
        return CoreHelper::clone($this->instance);
    }
}
