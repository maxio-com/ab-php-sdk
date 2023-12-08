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
     * Initializes a new create invoice payment request Builder object.
     */
    public static function init(CreateInvoicePayment $payment): self
    {
        return new self(new CreateInvoicePaymentRequest($payment));
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new create invoice payment request object.
     */
    public function build(): CreateInvoicePaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
