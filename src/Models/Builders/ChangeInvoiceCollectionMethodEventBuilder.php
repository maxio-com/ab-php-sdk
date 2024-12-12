<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChangeInvoiceCollectionMethodEvent;
use AdvancedBillingLib\Models\ChangeInvoiceCollectionMethodEventData;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChangeInvoiceCollectionMethodEvent
 *
 * @see ChangeInvoiceCollectionMethodEvent
 */
class ChangeInvoiceCollectionMethodEventBuilder
{
    /**
     * @var ChangeInvoiceCollectionMethodEvent
     */
    private $instance;

    private function __construct(ChangeInvoiceCollectionMethodEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Change Invoice Collection Method Event Builder object.
     *
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param ChangeInvoiceCollectionMethodEventData $eventData
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        ChangeInvoiceCollectionMethodEventData $eventData
    ): self {
        return new self(new ChangeInvoiceCollectionMethodEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new Change Invoice Collection Method Event object.
     */
    public function build(): ChangeInvoiceCollectionMethodEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
