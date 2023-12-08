<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProformaInvoiceDiscount;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaInvoiceDiscount
 *
 * @see ProformaInvoiceDiscount
 */
class ProformaInvoiceDiscountBuilder
{
    /**
     * @var ProformaInvoiceDiscount
     */
    private $instance;

    private function __construct(ProformaInvoiceDiscount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new proforma invoice discount Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaInvoiceDiscount());
    }

    /**
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets source type field.
     */
    public function sourceType(?string $value): self
    {
        $this->instance->setSourceType($value);
        return $this;
    }

    /**
     * Sets discount type field.
     */
    public function discountType(?string $value): self
    {
        $this->instance->setDiscountType($value);
        return $this;
    }

    /**
     * Sets eligible amount field.
     */
    public function eligibleAmount(?string $value): self
    {
        $this->instance->setEligibleAmount($value);
        return $this;
    }

    /**
     * Sets discount amount field.
     */
    public function discountAmount(?string $value): self
    {
        $this->instance->setDiscountAmount($value);
        return $this;
    }

    /**
     * Sets line item breakouts field.
     */
    public function lineItemBreakouts(?array $value): self
    {
        $this->instance->setLineItemBreakouts($value);
        return $this;
    }

    /**
     * Initializes a new proforma invoice discount object.
     */
    public function build(): ProformaInvoiceDiscount
    {
        return CoreHelper::clone($this->instance);
    }
}
