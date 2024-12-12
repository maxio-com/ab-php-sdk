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

class VoidInvoiceEvent implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var Invoice
     */
    private $invoice;

    /**
     * @var string
     */
    private $eventType;

    /**
     * @var VoidInvoiceEventData
     */
    private $eventData;

    /**
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param VoidInvoiceEventData $eventData
     */
    public function __construct(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        VoidInvoiceEventData $eventData
    ) {
        $this->id = $id;
        $this->timestamp = $timestamp;
        $this->invoice = $invoice;
        $this->eventType = $eventType;
        $this->eventData = $eventData;
    }

    /**
     * Returns Id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Timestamp.
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @required
     * @maps timestamp
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTimestamp(\DateTime $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Invoice.
     */
    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    /**
     * Sets Invoice.
     *
     * @required
     * @maps invoice
     */
    public function setInvoice(Invoice $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * Returns Event Type.
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * Sets Event Type.
     *
     * @required
     * @maps event_type
     * @factory \AdvancedBillingLib\Models\InvoiceEventType::checkValue
     */
    public function setEventType(string $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * Returns Event Data.
     * Example schema for an `void_invoice` event
     */
    public function getEventData(): VoidInvoiceEventData
    {
        return $this->eventData;
    }

    /**
     * Sets Event Data.
     * Example schema for an `void_invoice` event
     *
     * @required
     * @maps event_data
     */
    public function setEventData(VoidInvoiceEventData $eventData): void
    {
        $this->eventData = $eventData;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        $json['id']         = $this->id;
        $json['timestamp']  = DateTimeHelper::toRfc3339DateTime($this->timestamp);
        $json['invoice']    = $this->invoice;
        $json['event_type'] = InvoiceEventType::checkValue($this->eventType);
        $json['event_data'] = $this->eventData;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
