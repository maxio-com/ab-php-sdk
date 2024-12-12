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
     * Initializes a new Record Payment Request Builder object.
     *
     * @param CreatePayment $payment
     */
    public static function init(CreatePayment $payment): self
    {
        return new self(new RecordPaymentRequest($payment));
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
     * Initializes a new Record Payment Request object.
     */
    public function build(): RecordPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
