<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\InvoiceEvent;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceEvent
 *
 * @see InvoiceEvent
 */
class InvoiceEventBuilder
{
    /**
     * @var InvoiceEvent
     */
    private $instance;

    private function __construct(InvoiceEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice event Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceEvent());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets event type field.
     */
    public function eventType(?string $value): self
    {
        $this->instance->setEventType($value);
        return $this;
    }

    /**
     * Sets event data field.
     */
    public function eventData($value): self
    {
        $this->instance->setEventData($value);
        return $this;
    }

    /**
     * Sets timestamp field.
     */
    public function timestamp(?string $value): self
    {
        $this->instance->setTimestamp($value);
        return $this;
    }

    /**
     * Sets invoice field.
     */
    public function invoice(?Invoice $value): self
    {
        $this->instance->setInvoice($value);
        return $this;
    }

    /**
     * Initializes a new invoice event object.
     */
    public function build(): InvoiceEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
