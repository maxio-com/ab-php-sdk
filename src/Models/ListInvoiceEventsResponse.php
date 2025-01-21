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

class ListInvoiceEventsResponse implements \JsonSerializable
{
    /**
     * @var array<ApplyCreditNoteEvent|ApplyDebitNoteEvent|ApplyPaymentEvent|BackportInvoiceEvent|ChangeChargebackStatusEvent|ChangeInvoiceCollectionMethodEvent|ChangeInvoiceStatusEvent|CreateCreditNoteEvent|CreateDebitNoteEvent|FailedPaymentEvent|IssueInvoiceEvent|RefundInvoiceEvent|RemovePaymentEvent|VoidInvoiceEvent|VoidRemainderEvent>|null
     */
    private $events;

    /**
     * @var int|null
     */
    private $page;

    /**
     * @var int|null
     */
    private $perPage;

    /**
     * @var int|null
     */
    private $totalPages;

    /**
     * Returns Events.
     *
     * @return array<ApplyCreditNoteEvent|ApplyDebitNoteEvent|ApplyPaymentEvent|BackportInvoiceEvent|ChangeChargebackStatusEvent|ChangeInvoiceCollectionMethodEvent|ChangeInvoiceStatusEvent|CreateCreditNoteEvent|CreateDebitNoteEvent|FailedPaymentEvent|IssueInvoiceEvent|RefundInvoiceEvent|RemovePaymentEvent|VoidInvoiceEvent|VoidRemainderEvent>|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * Sets Events.
     *
     * @maps events
     * @mapsBy anyOf(anyOf{eventType}(ApplyCreditNoteEvent{applyCreditNote},ApplyDebitNoteEvent{applyDebitNote},ApplyPaymentEvent{applyPayment},BackportInvoiceEvent{backportInvoice},ChangeChargebackStatusEvent{changeChargebackStatus},ChangeInvoiceCollectionMethodEvent{changeInvoiceCollectionMethod},ChangeInvoiceStatusEvent{changeInvoiceStatus},CreateCreditNoteEvent{createCreditNote},CreateDebitNoteEvent{createDebitNote},FailedPaymentEvent{failedPayment},IssueInvoiceEvent{issueInvoice},RefundInvoiceEvent{refundInvoice},RemovePaymentEvent{removePayment},VoidInvoiceEvent{voidInvoice},VoidRemainderEvent{voidRemainder})[],null)
     *
     * @param array<ApplyCreditNoteEvent|ApplyDebitNoteEvent|ApplyPaymentEvent|BackportInvoiceEvent|ChangeChargebackStatusEvent|ChangeInvoiceCollectionMethodEvent|ChangeInvoiceStatusEvent|CreateCreditNoteEvent|CreateDebitNoteEvent|FailedPaymentEvent|IssueInvoiceEvent|RefundInvoiceEvent|RemovePaymentEvent|VoidInvoiceEvent|VoidRemainderEvent>|null $events
     */
    public function setEvents(?array $events): void
    {
        $this->events = $events;
    }

    /**
     * Returns Page.
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * Sets Page.
     *
     * @maps page
     */
    public function setPage(?int $page): void
    {
        $this->page = $page;
    }

    /**
     * Returns Per Page.
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * Sets Per Page.
     *
     * @maps per_page
     */
    public function setPerPage(?int $perPage): void
    {
        $this->perPage = $perPage;
    }

    /**
     * Returns Total Pages.
     */
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }

    /**
     * Sets Total Pages.
     *
     * @maps total_pages
     */
    public function setTotalPages(?int $totalPages): void
    {
        $this->totalPages = $totalPages;
    }

    /**
     * Converts the ListInvoiceEventsResponse object to a human-readable string representation.
     *
     * @return string The string representation of the ListInvoiceEventsResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ListInvoiceEventsResponse',
            [
                'events' => $this->events,
                'page' => $this->page,
                'perPage' => $this->perPage,
                'totalPages' => $this->totalPages,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
        if (isset($this->events)) {
            $json['events']      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->events,
                    'anyOf(anyOf{eventType}(ApplyCreditNoteEvent{applyCreditNote},ApplyDebitNoteEvent' .
                    '{applyDebitNote},ApplyPaymentEvent{applyPayment},BackportInvoiceEvent{backportIn' .
                    'voice},ChangeChargebackStatusEvent{changeChargebackStatus},ChangeInvoiceCollecti' .
                    'onMethodEvent{changeInvoiceCollectionMethod},ChangeInvoiceStatusEvent{changeInvo' .
                    'iceStatus},CreateCreditNoteEvent{createCreditNote},CreateDebitNoteEvent{createDe' .
                    'bitNote},FailedPaymentEvent{failedPayment},IssueInvoiceEvent{issueInvoice},Refun' .
                    'dInvoiceEvent{refundInvoice},RemovePaymentEvent{removePayment},VoidInvoiceEvent{' .
                    'voidInvoice},VoidRemainderEvent{voidRemainder})[],null)'
                );
        }
        if (isset($this->page)) {
            $json['page']        = $this->page;
        }
        if (isset($this->perPage)) {
            $json['per_page']    = $this->perPage;
        }
        if (isset($this->totalPages)) {
            $json['total_pages'] = $this->totalPages;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
