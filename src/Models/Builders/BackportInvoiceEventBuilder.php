<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BackportInvoiceEvent;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model BackportInvoiceEvent
 *
 * @see BackportInvoiceEvent
 */
class BackportInvoiceEventBuilder
{
    /**
     * @var BackportInvoiceEvent
     */
    private $instance;

    private function __construct(BackportInvoiceEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Backport Invoice Event Builder object.
     *
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param Invoice $eventData
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        Invoice $eventData
    ): self {
        return new self(new BackportInvoiceEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new Backport Invoice Event object.
     */
    public function build(): BackportInvoiceEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
