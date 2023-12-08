<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class InvoiceEvent implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $eventType;

    /**
     * @var ApplyCreditNoteEventData|ApplyDebitNoteEventData|ApplyPaymentEventData|ChangeInvoiceCollectionMethodEventData|IssueInvoiceEventData|RefundInvoiceEventData|RemovePaymentEventData|VoidInvoiceEventData|VoidInvoiceEventData1|null
     */
    private $eventData;

    /**
     * @var string|null
     */
    private $timestamp;

    /**
     * @var Invoice|null
     */
    private $invoice;

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
     * Returns Event Type.
     * Invoice Event Type
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * Sets Event Type.
     * Invoice Event Type
     *
     * @maps event_type
     * @factory \AdvancedBillingLib\Models\InvoiceEventType::checkValue
     */
    public function setEventType(?string $eventType): void
    {
        $this->eventType = $eventType;
    }

    /**
     * Returns Event Data.
     * The event data is the data that, when combined with the command, results in the output invoice found
     * in the invoice field.
     *
     * @return ApplyCreditNoteEventData|ApplyDebitNoteEventData|ApplyPaymentEventData|ChangeInvoiceCollectionMethodEventData|IssueInvoiceEventData|RefundInvoiceEventData|RemovePaymentEventData|VoidInvoiceEventData|VoidInvoiceEventData1|null
     */
    public function getEventData()
    {
        return $this->eventData;
    }

    /**
     * Sets Event Data.
     * The event data is the data that, when combined with the command, results in the output invoice found
     * in the invoice field.
     *
     * @maps event_data
     * @mapsBy anyOf(anyOf(ApplyCreditNoteEventData,ApplyDebitNoteEventData,ApplyPaymentEventData,ChangeInvoiceCollectionMethodEventData,IssueInvoiceEventData,RefundInvoiceEventData,RemovePaymentEventData,VoidInvoiceEventData,VoidInvoiceEventData1),null)
     *
     * @param ApplyCreditNoteEventData|ApplyDebitNoteEventData|ApplyPaymentEventData|ChangeInvoiceCollectionMethodEventData|IssueInvoiceEventData|RefundInvoiceEventData|RemovePaymentEventData|VoidInvoiceEventData|VoidInvoiceEventData1|null $eventData
     */
    public function setEventData($eventData): void
    {
        $this->eventData = $eventData;
    }

    /**
     * Returns Timestamp.
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @maps timestamp
     */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Invoice.
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * Sets Invoice.
     *
     * @maps invoice
     */
    public function setInvoice(?Invoice $invoice): void
    {
        $this->invoice = $invoice;
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
        if (isset($this->eventType)) {
            $json['event_type'] = InvoiceEventType::checkValue($this->eventType);
        }
        if (isset($this->eventData)) {
            $json['event_data'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->eventData,
                    'anyOf(anyOf(ApplyCreditNoteEventData,ApplyDebitNoteEventData,ApplyPaymentEventDa' .
                    'ta,ChangeInvoiceCollectionMethodEventData,IssueInvoiceEventData,RefundInvoiceEve' .
                    'ntData,RemovePaymentEventData,VoidInvoiceEventData,VoidInvoiceEventData1),null)'
                );
        }
        if (isset($this->timestamp)) {
            $json['timestamp']  = $this->timestamp;
        }
        if (isset($this->invoice)) {
            $json['invoice']    = $this->invoice;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
