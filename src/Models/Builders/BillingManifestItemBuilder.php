<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BillingManifestItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model BillingManifestItem
 *
 * @see BillingManifestItem
 */
class BillingManifestItemBuilder
{
    /**
     * @var BillingManifestItem
     */
    private $instance;

    private function __construct(BillingManifestItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Billing Manifest Item Builder object.
     */
    public static function init(): self
    {
        return new self(new BillingManifestItem());
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
     * Sets component name field.
     *
     * @param string|null $value
     */
    public function componentName(?string $value): self
    {
        $this->instance->setComponentName($value);
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
     * Sets product handle field.
     *
     * @param string|null $value
     */
    public function productHandle(?string $value): self
    {
        $this->instance->setProductHandle($value);
        return $this;
    }

    /**
     * Sets product name field.
     *
     * @param string|null $value
     */
    public function productName(?string $value): self
    {
        $this->instance->setProductName($value);
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
     * Initializes a new Billing Manifest Item object.
     */
    public function build(): BillingManifestItem
    {
        return CoreHelper::clone($this->instance);
    }
}
