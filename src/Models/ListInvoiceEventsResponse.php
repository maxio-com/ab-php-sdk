<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListInvoiceEventsResponse implements \JsonSerializable
{
    /**
     * @var InvoiceEvent[]|null
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
     * @return InvoiceEvent[]|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * Sets Events.
     *
     * @maps events
     *
     * @param InvoiceEvent[]|null $events
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
            $json['events']      = $this->events;
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
