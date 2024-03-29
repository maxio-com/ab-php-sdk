<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BulkUpdateSegments implements \JsonSerializable
{
    /**
     * @var BulkUpdateSegmentsItem[]|null
     */
    private $segments;

    /**
     * Returns Segments.
     *
     * @return BulkUpdateSegmentsItem[]|null
     */
    public function getSegments(): ?array
    {
        return $this->segments;
    }

    /**
     * Sets Segments.
     *
     * @maps segments
     *
     * @param BulkUpdateSegmentsItem[]|null $segments
     */
    public function setSegments(?array $segments): void
    {
        $this->segments = $segments;
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
        if (isset($this->segments)) {
            $json['segments'] = $this->segments;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
