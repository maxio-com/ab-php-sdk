<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceLineItemEventData;
use AdvancedBillingLib\Models\InvoiceLineItemPricingDetail;
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
     * Initializes a new Invoice Line Item Event Data Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceLineItemEventData());
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
     * Sets quantity field.
     *
     * @param int|null $value
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets quantity delta field.
     *
     * @param int|null $value
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
     *
     * @param string|null $value
     */
    public function unitPrice(?string $value): self
    {
        $this->instance->setUnitPrice($value);
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
     * Sets amount field.
     *
     * @param string|null $value
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets line references field.
     *
     * @param string|null $value
     */
    public function lineReferences(?string $value): self
    {
        $this->instance->setLineReferences($value);
        return $this;
    }

    /**
     * Sets pricing details index field.
     *
     * @param int|null $value
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
     *
     * @param InvoiceLineItemPricingDetail[]|null $value
     */
    public function pricingDetails(?array $value): self
    {
        $this->instance->setPricingDetails($value);
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
     * Unsets tax code field.
     */
    public function unsetTaxCode(): self
    {
        $this->instance->unsetTaxCode();
        return $this;
    }

    /**
     * Sets tax amount field.
     *
     * @param string|null $value
     */
    public function taxAmount(?string $value): self
    {
        $this->instance->setTaxAmount($value);
        return $this;
    }

    /**
     * Sets product id field.
     *
     * @param int|null $value
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     *
     * @param int|null $value
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Unsets product price point id field.
     */
    public function unsetProductPricePointId(): self
    {
        $this->instance->unsetProductPricePointId();
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param int|null $value
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
     *
     * @param int|null $value
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
     *
     * @param int|null $value
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
     *
     * @param bool|null $value
     */
    public function customItem(?bool $value): self
    {
        $this->instance->setCustomItem($value);
        return $this;
    }

    /**
     * Unsets custom item field.
     */
    public function unsetCustomItem(): self
    {
        $this->instance->unsetCustomItem();
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
     * Initializes a new Invoice Line Item Event Data object.
     */
    public function build(): InvoiceLineItemEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
