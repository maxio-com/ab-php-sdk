<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChangeInvoiceStatusEvent;
use AdvancedBillingLib\Models\ChangeInvoiceStatusEventData;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChangeInvoiceStatusEvent
 *
 * @see ChangeInvoiceStatusEvent
 */
class ChangeInvoiceStatusEventBuilder
{
    /**
     * @var ChangeInvoiceStatusEvent
     */
    private $instance;

    private function __construct(ChangeInvoiceStatusEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Change Invoice Status Event Builder object.
     *
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param ChangeInvoiceStatusEventData $eventData
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        ChangeInvoiceStatusEventData $eventData
    ): self {
        return new self(new ChangeInvoiceStatusEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new Change Invoice Status Event object.
     */
    public function build(): ChangeInvoiceStatusEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
