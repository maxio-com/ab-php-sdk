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

class FeatureTemplatesListResponse implements \JsonSerializable
{
    /**
     * @var FeatureTemplate[]
     */
    private $items;

    /**
     * @var int
     */
    private $totalCount;

    /**
     * @var int
     */
    private $archivedCount;

    /**
     * @param FeatureTemplate[] $items
     * @param int $totalCount
     * @param int $archivedCount
     */
    public function __construct(array $items, int $totalCount, int $archivedCount)
    {
        $this->items = $items;
        $this->totalCount = $totalCount;
        $this->archivedCount = $archivedCount;
    }

    /**
     * Returns Items.
     *
     * @return FeatureTemplate[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     *
     * @required
     * @maps items
     *
     * @param FeatureTemplate[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * Returns Total Count.
     * Total number of feature templates matching the filters, across all pages.
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Sets Total Count.
     * Total number of feature templates matching the filters, across all pages.
     *
     * @required
     * @maps total_count
     */
    public function setTotalCount(int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * Returns Archived Count.
     * Number of archived feature templates matching the filters. Returned as `0` unless the active result
     * set is empty or `status=archived` was requested.
     */
    public function getArchivedCount(): int
    {
        return $this->archivedCount;
    }

    /**
     * Sets Archived Count.
     * Number of archived feature templates matching the filters. Returned as `0` unless the active result
     * set is empty or `status=archived` was requested.
     *
     * @required
     * @maps archived_count
     */
    public function setArchivedCount(int $archivedCount): void
    {
        $this->archivedCount = $archivedCount;
    }

    /**
     * Converts the FeatureTemplatesListResponse object to a human-readable string representation.
     *
     * @return string The string representation of the FeatureTemplatesListResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FeatureTemplatesListResponse',
            [
                'items' => $this->items,
                'totalCount' => $this->totalCount,
                'archivedCount' => $this->archivedCount,
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
        $json['items']          = $this->items;
        $json['total_count']    = $this->totalCount;
        $json['archived_count'] = $this->archivedCount;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
