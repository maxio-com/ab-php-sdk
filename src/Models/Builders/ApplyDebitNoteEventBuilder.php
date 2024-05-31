<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyDebitNoteEvent;
use AdvancedBillingLib\Models\ApplyDebitNoteEventData;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ApplyDebitNoteEvent
 *
 * @see ApplyDebitNoteEvent
 */
class ApplyDebitNoteEventBuilder
{
    /**
     * @var ApplyDebitNoteEvent
     */
    private $instance;

    private function __construct(ApplyDebitNoteEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apply debit note event Builder object.
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        ApplyDebitNoteEventData $eventData
    ): self {
        return new self(new ApplyDebitNoteEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new apply debit note event object.
     */
    public function build(): ApplyDebitNoteEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
