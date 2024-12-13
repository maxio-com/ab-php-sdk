<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\VoidRemainderEvent;
use AdvancedBillingLib\Models\VoidRemainderEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model VoidRemainderEvent
 *
 * @see VoidRemainderEvent
 */
class VoidRemainderEventBuilder
{
    /**
     * @var VoidRemainderEvent
     */
    private $instance;

    private function __construct(VoidRemainderEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Void Remainder Event Builder object.
     *
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param VoidRemainderEventData $eventData
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        VoidRemainderEventData $eventData
    ): self {
        return new self(new VoidRemainderEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new Void Remainder Event object.
     */
    public function build(): VoidRemainderEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
