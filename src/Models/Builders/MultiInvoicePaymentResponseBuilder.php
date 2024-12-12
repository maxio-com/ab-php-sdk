<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MultiInvoicePayment;
use AdvancedBillingLib\Models\MultiInvoicePaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model MultiInvoicePaymentResponse
 *
 * @see MultiInvoicePaymentResponse
 */
class MultiInvoicePaymentResponseBuilder
{
    /**
     * @var MultiInvoicePaymentResponse
     */
    private $instance;

    private function __construct(MultiInvoicePaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Multi Invoice Payment Response Builder object.
     *
     * @param MultiInvoicePayment $payment
     */
    public static function init(MultiInvoicePayment $payment): self
    {
        return new self(new MultiInvoicePaymentResponse($payment));
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
     * Initializes a new Multi Invoice Payment Response object.
     */
    public function build(): MultiInvoicePaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
