<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyCreditNoteEvent;
use AdvancedBillingLib\Models\ApplyCreditNoteEventData;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ApplyCreditNoteEvent
 *
 * @see ApplyCreditNoteEvent
 */
class ApplyCreditNoteEventBuilder
{
    /**
     * @var ApplyCreditNoteEvent
     */
    private $instance;

    private function __construct(ApplyCreditNoteEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apply credit note event Builder object.
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        ApplyCreditNoteEventData $eventData
    ): self {
        return new self(new ApplyCreditNoteEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new apply credit note event object.
     */
    public function build(): ApplyCreditNoteEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
