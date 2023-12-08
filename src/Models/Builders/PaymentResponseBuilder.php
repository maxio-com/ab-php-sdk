<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoicePrePayment;
use AdvancedBillingLib\Models\PaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentResponse
 *
 * @see PaymentResponse
 */
class PaymentResponseBuilder
{
    /**
     * @var PaymentResponse
     */
    private $instance;

    private function __construct(PaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment response Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentResponse());
    }

    /**
     * Sets paid invoices field.
     */
    public function paidInvoices(?array $value): self
    {
        $this->instance->setPaidInvoices($value);
        return $this;
    }

    /**
     * Sets prepayment field.
     */
    public function prepayment(?InvoicePrePayment $value): self
    {
        $this->instance->setPrepayment($value);
        return $this;
    }

    /**
     * Initializes a new payment response object.
     */
    public function build(): PaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
