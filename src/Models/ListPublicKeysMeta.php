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

class ListPublicKeysMeta implements \JsonSerializable
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
     * Converts the ListPublicKeysMeta object to a human-readable string representation.
     *
     * @return string The string representation of the ListPublicKeysMeta object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ListPublicKeysMeta',
            [
                'totalCount' => $this->totalCount,
                'currentPage' => $this->currentPage,
                'totalPages' => $this->totalPages,
                'perPage' => $this->perPage,
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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
