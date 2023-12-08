<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PaginatedMetadata implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $totalCount;

    /**
     * @var int|null
     */
    private $currentPage;

    /**
     * @var int|null
     */
    private $totalPages;

    /**
     * @var int|null
     */
    private $perPage;

    /**
     * @var Metadata[]|null
     */
    private $metadata;

    /**
     * Returns Total Count.
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Sets Total Count.
     *
     * @maps total_count
     */
    public function setTotalCount(?int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * Returns Current Page.
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * Sets Current Page.
     *
     * @maps current_page
     */
    public function setCurrentPage(?int $currentPage): void
    {
        $this->currentPage = $currentPage;
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
     * Returns Metadata.
     *
     * @return Metadata[]|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * @maps metadata
     *
     * @param Metadata[]|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata = $metadata;
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
        if (isset($this->totalCount)) {
            $json['total_count']  = $this->totalCount;
        }
        if (isset($this->currentPage)) {
            $json['current_page'] = $this->currentPage;
        }
        if (isset($this->totalPages)) {
            $json['total_pages']  = $this->totalPages;
        }
        if (isset($this->perPage)) {
            $json['per_page']     = $this->perPage;
        }
        if (isset($this->metadata)) {
            $json['metadata']     = $this->metadata;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
