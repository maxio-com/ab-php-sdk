<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoicePrePayment;
use AdvancedBillingLib\Models\RecordPaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model RecordPaymentResponse
 *
 * @see RecordPaymentResponse
 */
class RecordPaymentResponseBuilder
{
    /**
     * @var RecordPaymentResponse
     */
    private $instance;

    private function __construct(RecordPaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new record payment response Builder object.
     */
    public static function init(): self
    {
        return new self(new RecordPaymentResponse());
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
     * Unsets prepayment field.
     */
    public function unsetPrepayment(): self
    {
        $this->instance->unsetPrepayment();
        return $this;
    }

    /**
     * Initializes a new record payment response object.
     */
    public function build(): RecordPaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
