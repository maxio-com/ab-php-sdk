<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\RefundInvoiceEvent;
use AdvancedBillingLib\Models\RefundInvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundInvoiceEvent
 *
 * @see RefundInvoiceEvent
 */
class RefundInvoiceEventBuilder
{
    /**
     * @var RefundInvoiceEvent
     */
    private $instance;

    private function __construct(RefundInvoiceEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new refund invoice event Builder object.
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        RefundInvoiceEventData $eventData
    ): self {
        return new self(new RefundInvoiceEvent($id, $timestamp, $invoice, $eventType, $eventData));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new refund invoice event object.
     */
    public function build(): RefundInvoiceEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
