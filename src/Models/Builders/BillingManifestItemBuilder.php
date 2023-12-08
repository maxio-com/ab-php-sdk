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
     * Initializes a new billing manifest item Builder object.
     */
    public static function init(): self
    {
        return new self(new BillingManifestItem());
    }

    /**
     * Sets transaction type field.
     */
    public function transactionType(?string $value): self
    {
        $this->instance->setTransactionType($value);
        return $this;
    }

    /**
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets amount in cents field.
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets discount amount in cents field.
     */
    public function discountAmountInCents(?int $value): self
    {
        $this->instance->setDiscountAmountInCents($value);
        return $this;
    }

    /**
     * Sets taxable amount in cents field.
     */
    public function taxableAmountInCents(?int $value): self
    {
        $this->instance->setTaxableAmountInCents($value);
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
     * Sets component handle field.
     */
    public function componentHandle(?string $value): self
    {
        $this->instance->setComponentHandle($value);
        return $this;
    }

    /**
     * Sets component name field.
     */
    public function componentName(?string $value): self
    {
        $this->instance->setComponentName($value);
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
     * Sets product handle field.
     */
    public function productHandle(?string $value): self
    {
        $this->instance->setProductHandle($value);
        return $this;
    }

    /**
     * Sets product name field.
     */
    public function productName(?string $value): self
    {
        $this->instance->setProductName($value);
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
     * Initializes a new billing manifest item object.
     */
    public function build(): BillingManifestItem
    {
        return CoreHelper::clone($this->instance);
    }
}
