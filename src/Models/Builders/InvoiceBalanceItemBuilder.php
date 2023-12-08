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
     * Initializes a new invoice balance item Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceBalanceItem());
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
     * Sets number field.
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Sets outstanding amount field.
     */
    public function outstandingAmount(?string $value): self
    {
        $this->instance->setOutstandingAmount($value);
        return $this;
    }

    /**
     * Initializes a new invoice balance item object.
     */
    public function build(): InvoiceBalanceItem
    {
        return CoreHelper::clone($this->instance);
    }
}
