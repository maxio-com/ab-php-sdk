<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationPreviewLineItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocationPreviewLineItem
 *
 * @see AllocationPreviewLineItem
 */
class AllocationPreviewLineItemBuilder
{
    /**
     * @var AllocationPreviewLineItem
     */
    private $instance;

    private function __construct(AllocationPreviewLineItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Allocation Preview Line Item Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocationPreviewLineItem());
    }

    /**
     * Sets transaction type field.
     *
     * @param string|null $value
     */
    public function transactionType(?string $value): self
    {
        $this->instance->setTransactionType($value);
        return $this;
    }

    /**
     * Sets kind field.
     *
     * @param string|null $value
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets amount in cents field.
     *
     * @param int|null $value
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets discount amount in cents field.
     *
     * @param int|null $value
     */
    public function discountAmountInCents(?int $value): self
    {
        $this->instance->setDiscountAmountInCents($value);
        return $this;
    }

    /**
     * Sets taxable amount in cents field.
     *
     * @param int|null $value
     */
    public function taxableAmountInCents(?int $value): self
    {
        $this->instance->setTaxableAmountInCents($value);
        return $this;
    }

    /**
     * Sets component id field.
     *
     * @param int|null $value
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets component handle field.
     *
     * @param string|null $value
     */
    public function componentHandle(?string $value): self
    {
        $this->instance->setComponentHandle($value);
        return $this;
    }

    /**
     * Sets direction field.
     *
     * @param string|null $value
     */
    public function direction(?string $value): self
    {
        $this->instance->setDirection($value);
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
     * Initializes a new Allocation Preview Line Item object.
     */
    public function build(): AllocationPreviewLineItem
    {
        return CoreHelper::clone($this->instance);
    }
}
