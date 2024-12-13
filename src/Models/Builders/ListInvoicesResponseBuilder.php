<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\ListInvoicesResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListInvoicesResponse
 *
 * @see ListInvoicesResponse
 */
class ListInvoicesResponseBuilder
{
    /**
     * @var ListInvoicesResponse
     */
    private $instance;

    private function __construct(ListInvoicesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Invoices Response Builder object.
     *
     * @param Invoice[] $invoices
     */
    public static function init(array $invoices): self
    {
        return new self(new ListInvoicesResponse($invoices));
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
     * Initializes a new List Invoices Response object.
     */
    public function build(): ListInvoicesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
