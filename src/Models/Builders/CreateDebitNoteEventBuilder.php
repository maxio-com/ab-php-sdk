<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateDebitNoteEvent;
use AdvancedBillingLib\Models\DebitNote;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateDebitNoteEvent
 *
 * @see CreateDebitNoteEvent
 */
class CreateDebitNoteEventBuilder
{
    /**
     * @var CreateDebitNoteEvent
     */
    private $instance;

    private function __construct(CreateDebitNoteEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Debit Note Event Builder object.
     *
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param DebitNote $eventData
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        DebitNote $eventData
    ): self {
        return new self(new CreateDebitNoteEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new Create Debit Note Event object.
     */
    public function build(): CreateDebitNoteEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
