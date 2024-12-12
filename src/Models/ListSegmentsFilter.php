<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListSegmentsFilter implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $segmentProperty1Value;

    /**
     * @var string|null
     */
    private $segmentProperty2Value;

    /**
     * @var string|null
     */
    private $segmentProperty3Value;

    /**
     * @var string|null
     */
    private $segmentProperty4Value;

    /**
     * Returns Segment Property 1 Value.
     * The value passed here would be used to filter segments. Pass a value related to `segment_property_1`
     * on attached Metric. If empty string is passed, this filter would be rejected. Use in query
     * `filter[segment_property_1_value]=EU`.
     */
    public function getSegmentProperty1Value(): ?string
    {
        return $this->segmentProperty1Value;
    }

    /**
     * Sets Segment Property 1 Value.
     * The value passed here would be used to filter segments. Pass a value related to `segment_property_1`
     * on attached Metric. If empty string is passed, this filter would be rejected. Use in query
     * `filter[segment_property_1_value]=EU`.
     *
     * @maps segment_property_1_value
     */
    public function setSegmentProperty1Value(?string $segmentProperty1Value): void
    {
        $this->segmentProperty1Value = $segmentProperty1Value;
    }

    /**
     * Returns Segment Property 2 Value.
     * The value passed here would be used to filter segments. Pass a value related to `segment_property_2`
     * on attached Metric. If empty string is passed, this filter would be rejected.
     */
    public function getSegmentProperty2Value(): ?string
    {
        return $this->segmentProperty2Value;
    }

    /**
     * Sets Segment Property 2 Value.
     * The value passed here would be used to filter segments. Pass a value related to `segment_property_2`
     * on attached Metric. If empty string is passed, this filter would be rejected.
     *
     * @maps segment_property_2_value
     */
    public function setSegmentProperty2Value(?string $segmentProperty2Value): void
    {
        $this->segmentProperty2Value = $segmentProperty2Value;
    }

    /**
     * Returns Segment Property 3 Value.
     * The value passed here would be used to filter segments. Pass a value related to `segment_property_3`
     * on attached Metric. If empty string is passed, this filter would be rejected.
     */
    public function getSegmentProperty3Value(): ?string
    {
        return $this->segmentProperty3Value;
    }

    /**
     * Sets Segment Property 3 Value.
     * The value passed here would be used to filter segments. Pass a value related to `segment_property_3`
     * on attached Metric. If empty string is passed, this filter would be rejected.
     *
     * @maps segment_property_3_value
     */
    public function setSegmentProperty3Value(?string $segmentProperty3Value): void
    {
        $this->segmentProperty3Value = $segmentProperty3Value;
    }

    /**
     * Returns Segment Property 4 Value.
     * The value passed here would be used to filter segments. Pass a value related to `segment_property_4`
     * on attached Metric. If empty string is passed, this filter would be rejected.
     */
    public function getSegmentProperty4Value(): ?string
    {
        return $this->segmentProperty4Value;
    }

    /**
     * Sets Segment Property 4 Value.
     * The value passed here would be used to filter segments. Pass a value related to `segment_property_4`
     * on attached Metric. If empty string is passed, this filter would be rejected.
     *
     * @maps segment_property_4_value
     */
    public function setSegmentProperty4Value(?string $segmentProperty4Value): void
    {
        $this->segmentProperty4Value = $segmentProperty4Value;
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
        if (isset($this->segmentProperty1Value)) {
            $json['segment_property_1_value'] = $this->segmentProperty1Value;
        }
        if (isset($this->segmentProperty2Value)) {
            $json['segment_property_2_value'] = $this->segmentProperty2Value;
        }
        if (isset($this->segmentProperty3Value)) {
            $json['segment_property_3_value'] = $this->segmentProperty3Value;
        }
        if (isset($this->segmentProperty4Value)) {
            $json['segment_property_4_value'] = $this->segmentProperty4Value;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
