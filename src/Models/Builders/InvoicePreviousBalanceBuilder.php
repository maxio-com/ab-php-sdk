<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoicePreviousBalance;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoicePreviousBalance
 *
 * @see InvoicePreviousBalance
 */
class InvoicePreviousBalanceBuilder
{
    /**
     * @var InvoicePreviousBalance
     */
    private $instance;

    private function __construct(InvoicePreviousBalance $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice previous balance Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoicePreviousBalance());
    }

    /**
     * Sets capture date field.
     */
    public function captureDate(?string $value): self
    {
        $this->instance->setCaptureDate($value);
        return $this;
    }

    /**
     * Sets invoices field.
     */
    public function invoices(?array $value): self
    {
        $this->instance->setInvoices($value);
        return $this;
    }

    /**
     * Initializes a new invoice previous balance object.
     */
    public function build(): InvoicePreviousBalance
    {
        return CoreHelper::clone($this->instance);
    }
}
