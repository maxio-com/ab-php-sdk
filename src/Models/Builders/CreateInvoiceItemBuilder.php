<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateInvoiceItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateInvoiceItem
 *
 * @see CreateInvoiceItem
 */
class CreateInvoiceItemBuilder
{
    /**
     * @var CreateInvoiceItem
     */
    private $instance;

    private function __construct(CreateInvoiceItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create invoice item Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateInvoiceItem());
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
     * Sets quantity field.
     */
    public function quantity($value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets unit price field.
     */
    public function unitPrice($value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Sets taxable field.
     */
    public function taxable(?bool $value): self
    {
        $this->instance->setTaxable($value);
        return $this;
    }

    /**
     * Sets tax code field.
     */
    public function taxCode(?string $value): self
    {
        $this->instance->setTaxCode($value);
        return $this;
    }

    /**
     * Sets period range start field.
     */
    public function periodRangeStart(?string $value): self
    {
        $this->instance->setPeriodRangeStart($value);
        return $this;
    }

    /**
     * Sets period range end field.
     */
    public function periodRangeEnd(?string $value): self
    {
        $this->instance->setPeriodRangeEnd($value);
        return $this;
    }

    /**
     * Sets product id field.
     */
    public function productId($value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets component id field.
     */
    public function componentId($value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId($value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     */
    public function productPricePointId($value): self
    {
        $this->instance->setProductPricePointId($value);
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
     * Initializes a new create invoice item object.
     */
    public function build(): CreateInvoiceItem
    {
        return CoreHelper::clone($this->instance);
    }
}
