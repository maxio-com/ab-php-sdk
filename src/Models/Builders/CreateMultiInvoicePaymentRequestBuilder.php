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
     * Initializes a new create multi invoice payment request Builder object.
     */
    public static function init(CreateMultiInvoicePayment $payment): self
    {
        return new self(new CreateMultiInvoicePaymentRequest($payment));
    }

    /**
     * Initializes a new create multi invoice payment request object.
     */
    public function build(): CreateMultiInvoicePaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
