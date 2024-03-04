<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceLineItemPricingDetail;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceLineItemPricingDetail
 *
 * @see InvoiceLineItemPricingDetail
 */
class InvoiceLineItemPricingDetailBuilder
{
    /**
     * @var InvoiceLineItemPricingDetail
     */
    private $instance;

    private function __construct(InvoiceLineItemPricingDetail $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice line item pricing detail Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceLineItemPricingDetail());
    }

    /**
     * Sets label field.
     */
    public function label(?string $value): self
    {
        $this->instance->setLabel($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new invoice line item pricing detail object.
     */
    public function build(): InvoiceLineItemPricingDetail
    {
        return CoreHelper::clone($this->instance);
    }
}
