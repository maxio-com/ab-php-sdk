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
     * Initializes a new List Proforma Invoices Meta Builder object.
     */
    public static function init(): self
    {
        return new self(new ListProformaInvoicesMeta());
    }

    /**
     * Sets total count field.
     *
     * @param int|null $value
     */
    public function totalCount(?int $value): self
    {
        $this->instance->setTotalCount($value);
        return $this;
    }

    /**
     * Sets current page field.
     *
     * @param int|null $value
     */
    public function currentPage(?int $value): self
    {
        $this->instance->setCurrentPage($value);
        return $this;
    }

    /**
     * Sets total pages field.
     *
     * @param int|null $value
     */
    public function totalPages(?int $value): self
    {
        $this->instance->setTotalPages($value);
        return $this;
    }

    /**
     * Sets status code field.
     *
     * @param int|null $value
     */
    public function statusCode(?int $value): self
    {
        $this->instance->setStatusCode($value);
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
     * Initializes a new List Proforma Invoices Meta object.
     */
    public function build(): ListProformaInvoicesMeta
    {
        return CoreHelper::clone($this->instance);
    }
}
