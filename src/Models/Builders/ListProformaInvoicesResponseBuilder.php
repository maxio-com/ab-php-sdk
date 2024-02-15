<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListProformaInvoicesMeta;
use AdvancedBillingLib\Models\ListProformaInvoicesResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListProformaInvoicesResponse
 *
 * @see ListProformaInvoicesResponse
 */
class ListProformaInvoicesResponseBuilder
{
    /**
     * @var ListProformaInvoicesResponse
     */
    private $instance;

    private function __construct(ListProformaInvoicesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list proforma invoices response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListProformaInvoicesResponse());
    }

    /**
     * Sets proforma invoices field.
     */
    public function proformaInvoices(?array $value): self
    {
        $this->instance->setProformaInvoices($value);
        return $this;
    }

    /**
     * Sets meta field.
     */
    public function meta(?ListProformaInvoicesMeta $value): self
    {
        $this->instance->setMeta($value);
        return $this;
    }

    /**
     * Initializes a new list proforma invoices response object.
     */
    public function build(): ListProformaInvoicesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
