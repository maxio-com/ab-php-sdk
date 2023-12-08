<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateSegmentRequest implements \JsonSerializable
{
    /**
     * @var CreateSegment
     */
    private $segment;

    /**
     * @param CreateSegment $segment
     */
    public function __construct(CreateSegment $segment)
    {
        $this->segment = $segment;
    }

    /**
     * Returns Segment.
     */
    public function getSegment(): CreateSegment
    {
        return $this->segment;
    }

    /**
     * Sets Segment.
     *
     * @required
     * @maps segment
     */
    public function setSegment(CreateSegment $segment): void
    {
        $this->segment = $segment;
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
        $json['segment'] = $this->segment;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
