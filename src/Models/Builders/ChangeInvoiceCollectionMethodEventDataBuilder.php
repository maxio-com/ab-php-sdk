<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChangeInvoiceCollectionMethodEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChangeInvoiceCollectionMethodEventData
 *
 * @see ChangeInvoiceCollectionMethodEventData
 */
class ChangeInvoiceCollectionMethodEventDataBuilder
{
    /**
     * @var ChangeInvoiceCollectionMethodEventData
     */
    private $instance;

    private function __construct(ChangeInvoiceCollectionMethodEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change invoice collection method event data Builder object.
     */
    public static function init(): self
    {
        return new self(new ChangeInvoiceCollectionMethodEventData());
    }

    /**
     * Sets from collection method field.
     */
    public function fromCollectionMethod(?string $value): self
    {
        $this->instance->setFromCollectionMethod($value);
        return $this;
    }

    /**
     * Sets to collection method field.
     */
    public function toCollectionMethod(?string $value): self
    {
        $this->instance->setToCollectionMethod($value);
        return $this;
    }

    /**
     * Initializes a new change invoice collection method event data object.
     */
    public function build(): ChangeInvoiceCollectionMethodEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
