<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditNoteLineItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreditNoteLineItem
 *
 * @see CreditNoteLineItem
 */
class CreditNoteLineItemBuilder
{
    /**
     * @var CreditNoteLineItem
     */
    private $instance;

    private function __construct(CreditNoteLineItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Credit Note Line Item Builder object.
     */
    public static function init(): self
    {
        return new self(new CreditNoteLineItem());
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
     * @param string|null $value
     */
    public function quantity(?string $value): self
    {
        $this->instance->setQuantity($value);
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
     * Sets subtotal amount field.
     *
     * @param string|null $value
     */
    public function subtotalAmount(?string $value): self
    {
        $this->instance->setSubtotalAmount($value);
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
     * Sets total amount field.
     *
     * @param string|null $value
     */
    public function totalAmount(?string $value): self
    {
        $this->instance->setTotalAmount($value);
        return $this;
    }

    /**
     * Sets tiered unit price field.
     *
     * @param bool|null $value
     */
    public function tieredUnitPrice(?bool $value): self
    {
        $this->instance->setTieredUnitPrice($value);
        return $this;
    }

    /**
     * Sets period range start field.
     *
     * @param \DateTime|null $value
     */
    public function periodRangeStart(?\DateTime $value): self
    {
        $this->instance->setPeriodRangeStart($value);
        return $this;
    }

    /**
     * Sets period range end field.
     *
     * @param \DateTime|null $value
     */
    public function periodRangeEnd(?\DateTime $value): self
    {
        $this->instance->setPeriodRangeEnd($value);
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
     * Sets product version field.
     *
     * @param int|null $value
     */
    public function productVersion(?int $value): self
    {
        $this->instance->setProductVersion($value);
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
     * Initializes a new Credit Note Line Item object.
     */
    public function build(): CreditNoteLineItem
    {
        return CoreHelper::clone($this->instance);
    }
}
