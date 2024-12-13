<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\FailedPaymentEvent;
use AdvancedBillingLib\Models\FailedPaymentEventData;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model FailedPaymentEvent
 *
 * @see FailedPaymentEvent
 */
class FailedPaymentEventBuilder
{
    /**
     * @var FailedPaymentEvent
     */
    private $instance;

    private function __construct(FailedPaymentEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Failed Payment Event Builder object.
     *
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param FailedPaymentEventData $eventData
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        FailedPaymentEventData $eventData
    ): self {
        return new self(new FailedPaymentEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new Failed Payment Event object.
     */
    public function build(): FailedPaymentEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
