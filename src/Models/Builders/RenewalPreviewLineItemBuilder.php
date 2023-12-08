<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RenewalPreviewLineItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model RenewalPreviewLineItem
 *
 * @see RenewalPreviewLineItem
 */
class RenewalPreviewLineItemBuilder
{
    /**
     * @var RenewalPreviewLineItem
     */
    private $instance;

    private function __construct(RenewalPreviewLineItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new renewal preview line item Builder object.
     */
    public static function init(): self
    {
        return new self(new RenewalPreviewLineItem());
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
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
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
     * Sets product handle field.
     */
    public function productHandle(?string $value): self
    {
        $this->instance->setProductHandle($value);
        return $this;
    }

    /**
     * Initializes a new renewal preview line item object.
     */
    public function build(): RenewalPreviewLineItem
    {
        return CoreHelper::clone($this->instance);
    }
}
