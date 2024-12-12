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
     * Initializes a new Create Invoice Item Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateInvoiceItem());
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
     * Sets quantity field.
     *
     * @param float|string|null $value
     */
    public function quantity($value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets unit price field.
     *
     * @param float|string|null $value
     */
    public function unitPrice($value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Sets taxable field.
     *
     * @param bool|null $value
     */
    public function taxable(?bool $value): self
    {
        $this->instance->setTaxable($value);
        return $this;
    }

    /**
     * Sets tax code field.
     *
     * @param string|null $value
     */
    public function taxCode(?string $value): self
    {
        $this->instance->setTaxCode($value);
        return $this;
    }

    /**
     * Sets period range start field.
     *
     * @param string|null $value
     */
    public function periodRangeStart(?string $value): self
    {
        $this->instance->setPeriodRangeStart($value);
        return $this;
    }

    /**
     * Sets period range end field.
     *
     * @param string|null $value
     */
    public function periodRangeEnd(?string $value): self
    {
        $this->instance->setPeriodRangeEnd($value);
        return $this;
    }

    /**
     * Sets product id field.
     *
     * @param string|int|null $value
     */
    public function productId($value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets component id field.
     *
     * @param string|int|null $value
     */
    public function componentId($value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param string|int|null $value
     */
    public function pricePointId($value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     *
     * @param string|int|null $value
     */
    public function productPricePointId($value): self
    {
        $this->instance->setProductPricePointId($value);
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
     * Initializes a new Create Invoice Item object.
     */
    public function build(): CreateInvoiceItem
    {
        return CoreHelper::clone($this->instance);
    }
}
