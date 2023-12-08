<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class EventBasedBillingSegmentError implements \JsonSerializable
{
    /**
     * @var array
     */
    private $segments;

    /**
     * @param array $segments
     */
    public function __construct(array $segments)
    {
        $this->segments = $segments;
    }

    /**
     * Returns Segments.
     * The key of the object would be a number (an index in the request array) where the error occurred. In
     * the value object, the key represents the field and the value is an array with error messages. In
     * most cases, this object would contain just one key.
     */
    public function getSegments(): array
    {
        return $this->segments;
    }

    /**
     * Sets Segments.
     * The key of the object would be a number (an index in the request array) where the error occurred. In
     * the value object, the key represents the field and the value is an array with error messages. In
     * most cases, this object would contain just one key.
     *
     * @required
     * @maps segments
     */
    public function setSegments(array $segments): void
    {
        $this->segments = $segments;
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
        $json['segments'] = $this->segments;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
