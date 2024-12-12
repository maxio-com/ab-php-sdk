<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ConsolidatedInvoice;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ConsolidatedInvoice
 *
 * @see ConsolidatedInvoice
 */
class ConsolidatedInvoiceBuilder
{
    /**
     * @var ConsolidatedInvoice
     */
    private $instance;

    private function __construct(ConsolidatedInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Consolidated Invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new ConsolidatedInvoice());
    }

    /**
     * Sets invoices field.
     *
     * @param Invoice[]|null $value
     */
    public function invoices(?array $value): self
    {
        $this->instance->setInvoices($value);
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
     * Initializes a new Consolidated Invoice object.
     */
    public function build(): ConsolidatedInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
