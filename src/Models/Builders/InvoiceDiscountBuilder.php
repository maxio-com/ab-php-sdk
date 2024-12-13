<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceDiscount;
use AdvancedBillingLib\Models\InvoiceDiscountBreakout;
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
     * Initializes a new Invoice Discount Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceDiscount());
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets title field.
     *
     * @param string|null $value
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
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
     *
     * @param string|null $value
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets source type field.
     *
     * @param string|null $value
     */
    public function sourceType(?string $value): self
    {
        $this->instance->setSourceType($value);
        return $this;
    }

    /**
     * Sets source id field.
     *
     * @param int|null $value
     */
    public function sourceId(?int $value): self
    {
        $this->instance->setSourceId($value);
        return $this;
    }

    /**
     * Sets discount type field.
     *
     * @param string|null $value
     */
    public function discountType(?string $value): self
    {
        $this->instance->setDiscountType($value);
        return $this;
    }

    /**
     * Sets percentage field.
     *
     * @param string|null $value
     */
    public function percentage(?string $value): self
    {
        $this->instance->setPercentage($value);
        return $this;
    }

    /**
     * Sets eligible amount field.
     *
     * @param string|null $value
     */
    public function eligibleAmount(?string $value): self
    {
        $this->instance->setEligibleAmount($value);
        return $this;
    }

    /**
     * Sets discount amount field.
     *
     * @param string|null $value
     */
    public function discountAmount(?string $value): self
    {
        $this->instance->setDiscountAmount($value);
        return $this;
    }

    /**
     * Sets transaction id field.
     *
     * @param int|null $value
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Sets line item breakouts field.
     *
     * @param InvoiceDiscountBreakout[]|null $value
     */
    public function lineItemBreakouts(?array $value): self
    {
        $this->instance->setLineItemBreakouts($value);
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
     * Initializes a new Invoice Discount object.
     */
    public function build(): InvoiceDiscount
    {
        return CoreHelper::clone($this->instance);
    }
}
