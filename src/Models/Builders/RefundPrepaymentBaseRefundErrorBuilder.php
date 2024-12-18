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
     * Initializes a new Refund Prepayment Base Refund Error Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundPrepaymentBaseRefundError());
    }

    /**
     * Sets refund field.
     *
     * @param BaseRefundError|null $value
     */
    public function refund(?BaseRefundError $value): self
    {
        $this->instance->setRefund($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Refund Prepayment Base Refund Error object.
     */
    public function build(): RefundPrepaymentBaseRefundError
    {
        return CoreHelper::clone($this->instance);
    }
}
