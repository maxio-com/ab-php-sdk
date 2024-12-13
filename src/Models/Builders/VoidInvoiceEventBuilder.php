<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\VoidInvoiceEvent;
use AdvancedBillingLib\Models\VoidInvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model VoidInvoiceEvent
 *
 * @see VoidInvoiceEvent
 */
class VoidInvoiceEventBuilder
{
    /**
     * @var VoidInvoiceEvent
     */
    private $instance;

    private function __construct(VoidInvoiceEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Void Invoice Event Builder object.
     *
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param VoidInvoiceEventData $eventData
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        VoidInvoiceEventData $eventData
    ): self {
        return new self(new VoidInvoiceEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new Void Invoice Event object.
     */
    public function build(): VoidInvoiceEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
