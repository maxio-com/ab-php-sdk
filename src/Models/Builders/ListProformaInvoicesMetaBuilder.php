<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListProformaInvoicesMeta;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListProformaInvoicesMeta
 *
 * @see ListProformaInvoicesMeta
 */
class ListProformaInvoicesMetaBuilder
{
    /**
     * @var ListProformaInvoicesMeta
     */
    private $instance;

    private function __construct(ListProformaInvoicesMeta $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list proforma invoices meta Builder object.
     */
    public static function init(): self
    {
        return new self(new ListProformaInvoicesMeta());
    }

    /**
     * Sets total count field.
     */
    public function totalCount(?int $value): self
    {
        $this->instance->setTotalCount($value);
        return $this;
    }

    /**
     * Sets current page field.
     */
    public function currentPage(?int $value): self
    {
        $this->instance->setCurrentPage($value);
        return $this;
    }

    /**
     * Sets total pages field.
     */
    public function totalPages(?int $value): self
    {
        $this->instance->setTotalPages($value);
        return $this;
    }

    /**
     * Sets status code field.
     */
    public function statusCode(?int $value): self
    {
        $this->instance->setStatusCode($value);
        return $this;
    }

    /**
     * Initializes a new list proforma invoices meta object.
     */
    public function build(): ListProformaInvoicesMeta
    {
        return CoreHelper::clone($this->instance);
    }
}
