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
use AdvancedBillingLib\Models\ProformaInvoice;
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
     * Initializes a new List Proforma Invoices Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListProformaInvoicesResponse());
    }

    /**
     * Sets proforma invoices field.
     *
     * @param ProformaInvoice[]|null $value
     */
    public function proformaInvoices(?array $value): self
    {
        $this->instance->setProformaInvoices($value);
        return $this;
    }

    /**
     * Sets meta field.
     *
     * @param ListProformaInvoicesMeta|null $value
     */
    public function meta(?ListProformaInvoicesMeta $value): self
    {
        $this->instance->setMeta($value);
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
     * Initializes a new List Proforma Invoices Response object.
     */
    public function build(): ListProformaInvoicesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
