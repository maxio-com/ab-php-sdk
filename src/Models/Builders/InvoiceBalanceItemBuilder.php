<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceBalanceItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceBalanceItem
 *
 * @see InvoiceBalanceItem
 */
class InvoiceBalanceItemBuilder
{
    /**
     * @var InvoiceBalanceItem
     */
    private $instance;

    private function __construct(InvoiceBalanceItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Invoice Balance Item Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceBalanceItem());
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
     * Sets number field.
     *
     * @param string|null $value
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Sets outstanding amount field.
     *
     * @param string|null $value
     */
    public function outstandingAmount(?string $value): self
    {
        $this->instance->setOutstandingAmount($value);
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
     * Initializes a new Invoice Balance Item object.
     */
    public function build(): InvoiceBalanceItem
    {
        return CoreHelper::clone($this->instance);
    }
}
