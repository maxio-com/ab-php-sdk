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
     * Initializes a new Refund Prepayment Request Builder object.
     *
     * @param RefundPrepayment $refund
     */
    public static function init(RefundPrepayment $refund): self
    {
        return new self(new RefundPrepaymentRequest($refund));
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
     * Initializes a new Refund Prepayment Request object.
     */
    public function build(): RefundPrepaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
