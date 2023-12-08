<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceDiscount;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceDiscount
 *
 * @see InvoiceDiscount
 */
class InvoiceDiscountBuilder
{
    /**
     * @var InvoiceDiscount
     */
    private $instance;

    private function __construct(InvoiceDiscount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice discount Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceDiscount());
    }

    /**
     * Sets uid field.
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
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
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets code field.
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
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
     * Sets source id field.
     */
    public function sourceId(?int $value): self
    {
        $this->instance->setSourceId($value);
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
     * Sets percentage field.
     */
    public function percentage(?string $value): self
    {
        $this->instance->setPercentage($value);
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
     * Sets transaction id field.
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
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
     * Initializes a new invoice discount object.
     */
    public function build(): InvoiceDiscount
    {
        return CoreHelper::clone($this->instance);
    }
}
