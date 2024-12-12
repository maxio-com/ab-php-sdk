<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateInvoicePayment;
use AdvancedBillingLib\Models\CreateInvoicePaymentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateInvoicePaymentRequest
 *
 * @see CreateInvoicePaymentRequest
 */
class CreateInvoicePaymentRequestBuilder
{
    /**
     * @var CreateInvoicePaymentRequest
     */
    private $instance;

    private function __construct(CreateInvoicePaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Invoice Payment Request Builder object.
     *
     * @param CreateInvoicePayment $payment
     */
    public static function init(CreateInvoicePayment $payment): self
    {
        return new self(new CreateInvoicePaymentRequest($payment));
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
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
     * Initializes a new Create Invoice Payment Request object.
     */
    public function build(): CreateInvoicePaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
