<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceLineItemEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceLineItemEventData
 *
 * @see InvoiceLineItemEventData
 */
class InvoiceLineItemEventDataBuilder
{
    /**
     * @var InvoiceLineItemEventData
     */
    private $instance;

    private function __construct(InvoiceLineItemEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice line item event data Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceLineItemEventData());
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
     * Sets quantity field.
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets quantity delta field.
     */
    public function quantityDelta(?int $value): self
    {
        $this->instance->setQuantityDelta($value);
        return $this;
    }

    /**
     * Unsets quantity delta field.
     */
    public function unsetQuantityDelta(): self
    {
        $this->instance->unsetQuantityDelta();
        return $this;
    }

    /**
     * Sets unit price field.
     */
    public function unitPrice(?string $value): self
    {
        $this->instance->setUnitPrice($value);
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
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets line references field.
     */
    public function lineReferences(?string $value): self
    {
        $this->instance->setLineReferences($value);
        return $this;
    }

    /**
     * Sets pricing details index field.
     */
    public function pricingDetailsIndex(?int $value): self
    {
        $this->instance->setPricingDetailsIndex($value);
        return $this;
    }

    /**
     * Unsets pricing details index field.
     */
    public function unsetPricingDetailsIndex(): self
    {
        $this->instance->unsetPricingDetailsIndex();
        return $this;
    }

    /**
     * Sets pricing details field.
     */
    public function pricingDetails(?array $value): self
    {
        $this->instance->setPricingDetails($value);
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
     * Sets tax amount field.
     */
    public function taxAmount(?string $value): self
    {
        $this->instance->setTaxAmount($value);
        return $this;
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Unsets price point id field.
     */
    public function unsetPricePointId(): self
    {
        $this->instance->unsetPricePointId();
        return $this;
    }

    /**
     * Sets component id field.
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Unsets component id field.
     */
    public function unsetComponentId(): self
    {
        $this->instance->unsetComponentId();
        return $this;
    }

    /**
     * Sets billing schedule item id field.
     */
    public function billingScheduleItemId(?int $value): self
    {
        $this->instance->setBillingScheduleItemId($value);
        return $this;
    }

    /**
     * Unsets billing schedule item id field.
     */
    public function unsetBillingScheduleItemId(): self
    {
        $this->instance->unsetBillingScheduleItemId();
        return $this;
    }

    /**
     * Sets custom item field.
     */
    public function customItem(?bool $value): self
    {
        $this->instance->setCustomItem($value);
        return $this;
    }

    /**
     * Initializes a new invoice line item event data object.
     */
    public function build(): InvoiceLineItemEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
