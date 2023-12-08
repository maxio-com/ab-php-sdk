<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceLineItemComponentCostData;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceLineItemComponentCostData
 *
 * @see InvoiceLineItemComponentCostData
 */
class InvoiceLineItemComponentCostDataBuilder
{
    /**
     * @var InvoiceLineItemComponentCostData
     */
    private $instance;

    private function __construct(InvoiceLineItemComponentCostData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice line item component cost data Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceLineItemComponentCostData());
    }

    /**
     * Sets rates field.
     */
    public function rates(?array $value): self
    {
        $this->instance->setRates($value);
        return $this;
    }

    /**
     * Initializes a new invoice line item component cost data object.
     */
    public function build(): InvoiceLineItemComponentCostData
    {
        return CoreHelper::clone($this->instance);
    }
}
