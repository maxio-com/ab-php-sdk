<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\InvoiceResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceResponse
 *
 * @see InvoiceResponse
 */
class InvoiceResponseBuilder
{
    /**
     * @var InvoiceResponse
     */
    private $instance;

    private function __construct(InvoiceResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Invoice Response Builder object.
     *
     * @param Invoice $invoice
     */
    public static function init(Invoice $invoice): self
    {
        return new self(new InvoiceResponse($invoice));
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
     * Initializes a new Invoice Response object.
     */
    public function build(): InvoiceResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
