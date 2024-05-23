<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

/**
 * @discriminator event_type
 * @discriminatorType Invoice Event
 */
class InvoiceEvent implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $timestamp;

    /**
     * @var Invoice1|null
     */
    private $invoice;

    /**
     * @var string|null
     */
    private $eventType;

    /**
     * @var ApplyCreditNoteEventData1|null
     */
    private $eventData;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Timestamp.
     */
    public function getTimestamp(): ?\DateTime
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @maps timestamp
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTimestamp(?\DateTime $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Invoice.
     */
    public function getInvoice(): ?Invoice1
    {
        return $this->invoice;
    }

    /**
     * Sets Invoice.
     *
     * @maps invoice
     */
    public function setInvoice(?Invoice1 $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * Returns Event Type.
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * Sets Event Type.
     *
     * @maps event_type
     */
    public function setEventType(?string $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * Returns Event Data.
     * Example schema for an `apply_credit_note` event
     */
    public function getEventData(): ?ApplyCreditNoteEventData1
    {
        return $this->eventData;
    }

    /**
     * Sets Event Data.
     * Example schema for an `apply_credit_note` event
     *
     * @maps event_data
     */
    public function setEventData(?ApplyCreditNoteEventData1 $eventData): void
    {
        $this->eventData = $eventData;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->id)) {
            $json['id']         = $this->id;
        }
        if (isset($this->timestamp)) {
            $json['timestamp']  = DateTimeHelper::toRfc3339DateTime($this->timestamp);
        }
        if (isset($this->invoice)) {
            $json['invoice']    = $this->invoice;
        }
        $json['event_type']     = $this->eventType ?? 'Invoice Event';
        if (isset($this->eventData)) {
            $json['event_data'] = $this->eventData;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
