<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateCreditNoteEvent;
use AdvancedBillingLib\Models\CreditNote;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateCreditNoteEvent
 *
 * @see CreateCreditNoteEvent
 */
class CreateCreditNoteEventBuilder
{
    /**
     * @var CreateCreditNoteEvent
     */
    private $instance;

    private function __construct(CreateCreditNoteEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Credit Note Event Builder object.
     *
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param CreditNote $eventData
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        CreditNote $eventData
    ): self {
        return new self(new CreateCreditNoteEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new Create Credit Note Event object.
     */
    public function build(): CreateCreditNoteEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
