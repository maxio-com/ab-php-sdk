<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateMultiInvoicePayment;
use AdvancedBillingLib\Models\CreateMultiInvoicePaymentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateMultiInvoicePaymentRequest
 *
 * @see CreateMultiInvoicePaymentRequest
 */
class CreateMultiInvoicePaymentRequestBuilder
{
    /**
     * @var CreateMultiInvoicePaymentRequest
     */
    private $instance;

    private function __construct(CreateMultiInvoicePaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Multi Invoice Payment Request Builder object.
     *
     * @param CreateMultiInvoicePayment $payment
     */
    public static function init(CreateMultiInvoicePayment $payment): self
    {
        return new self(new CreateMultiInvoicePaymentRequest($payment));
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
     * Initializes a new Create Multi Invoice Payment Request object.
     */
    public function build(): CreateMultiInvoicePaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
