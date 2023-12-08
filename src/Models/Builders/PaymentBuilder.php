<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Payment;
use Core\Utils\CoreHelper;

/**
 * Builder for model Payment
 *
 * @see Payment
 */
class PaymentBuilder
{
    /**
     * @var Payment
     */
    private $instance;

    private function __construct(Payment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment Builder object.
     */
    public static function init(): self
    {
        return new self(new Payment());
    }

    /**
     * Sets invoice uid field.
     */
    public function invoiceUid(?string $value): self
    {
        $this->instance->setInvoiceUid($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets due amount field.
     */
    public function dueAmount(?string $value): self
    {
        $this->instance->setDueAmount($value);
        return $this;
    }

    /**
     * Sets paid amount field.
     */
    public function paidAmount(?string $value): self
    {
        $this->instance->setPaidAmount($value);
        return $this;
    }

    /**
     * Initializes a new payment object.
     */
    public function build(): Payment
    {
        return CoreHelper::clone($this->instance);
    }
}
