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

/**
 * Custom rates for one segment of an event-based component, set on the subscription through
 * `custom_price.segments`.
 *
 * Identify the segment by the property values that occur in your events, in the same positions as the
 * segmenting properties defined on the component's meter. Each segment in a request must have a unique
 * combination of property values.
 *
 * Property values are matched against your events as text. Send values for boolean segmenting
 * properties as the strings `"true"` and `"false"`: JSON booleans are not supported here, and a
 * segment whose only property value is `false` is rejected with a 422.
 */
class SubscriptionComponentCustomPriceSegment implements \JsonSerializable
{
    /**
     * @var string|float|int|null
     */
    private $segmentProperty1Value;

    /**
     * @var string|float|int|null
     */
    private $segmentProperty2Value;

    /**
     * @var string|float|int|null
     */
    private $segmentProperty3Value;

    /**
     * @var string|float|int|null
     */
    private $segmentProperty4Value;

    /**
     * @var string|float|int|null
     */
    private $segmentProperty5Value;

    /**
     * @var string|float|int|null
     */
    private $segmentProperty6Value;

    /**
     * @var string|float|int|null
     */
    private $segmentProperty7Value;

    /**
     * @var string|float|int|null
     */
    private $segmentProperty8Value;

    /**
     * @var string|float|int|null
     */
    private $segmentProperty9Value;

    /**
     * @var string|float|int|null
     */
    private $segmentProperty10Value;

    /**
     * @var string
     */
    private $pricingScheme;

    /**
     * @var CreateOrUpdateSegmentPrice[]
     */
    private $prices;

    /**
     * @param string $pricingScheme
     * @param CreateOrUpdateSegmentPrice[] $prices
     */
    public function __construct(string $pricingScheme, array $prices)
    {
        $this->pricingScheme = $pricingScheme;
        $this->prices = $prices;
    }

    /**
     * Returns Segment Property 1 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty1Value()
    {
        return $this->segmentProperty1Value;
    }

    /**
     * Sets Segment Property 1 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_1_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty1Value
     */
    public function setSegmentProperty1Value($segmentProperty1Value): void
    {
        $this->segmentProperty1Value = $segmentProperty1Value;
    }

    /**
     * Returns Segment Property 2 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty2Value()
    {
        return $this->segmentProperty2Value;
    }

    /**
     * Sets Segment Property 2 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_2_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty2Value
     */
    public function setSegmentProperty2Value($segmentProperty2Value): void
    {
        $this->segmentProperty2Value = $segmentProperty2Value;
    }

    /**
     * Returns Segment Property 3 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty3Value()
    {
        return $this->segmentProperty3Value;
    }

    /**
     * Sets Segment Property 3 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_3_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty3Value
     */
    public function setSegmentProperty3Value($segmentProperty3Value): void
    {
        $this->segmentProperty3Value = $segmentProperty3Value;
    }

    /**
     * Returns Segment Property 4 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty4Value()
    {
        return $this->segmentProperty4Value;
    }

    /**
     * Sets Segment Property 4 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_4_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty4Value
     */
    public function setSegmentProperty4Value($segmentProperty4Value): void
    {
        $this->segmentProperty4Value = $segmentProperty4Value;
    }

    /**
     * Returns Segment Property 5 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty5Value()
    {
        return $this->segmentProperty5Value;
    }

    /**
     * Sets Segment Property 5 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_5_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty5Value
     */
    public function setSegmentProperty5Value($segmentProperty5Value): void
    {
        $this->segmentProperty5Value = $segmentProperty5Value;
    }

    /**
     * Returns Segment Property 6 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty6Value()
    {
        return $this->segmentProperty6Value;
    }

    /**
     * Sets Segment Property 6 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_6_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty6Value
     */
    public function setSegmentProperty6Value($segmentProperty6Value): void
    {
        $this->segmentProperty6Value = $segmentProperty6Value;
    }

    /**
     * Returns Segment Property 7 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty7Value()
    {
        return $this->segmentProperty7Value;
    }

    /**
     * Sets Segment Property 7 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_7_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty7Value
     */
    public function setSegmentProperty7Value($segmentProperty7Value): void
    {
        $this->segmentProperty7Value = $segmentProperty7Value;
    }

    /**
     * Returns Segment Property 8 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty8Value()
    {
        return $this->segmentProperty8Value;
    }

    /**
     * Sets Segment Property 8 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_8_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty8Value
     */
    public function setSegmentProperty8Value($segmentProperty8Value): void
    {
        $this->segmentProperty8Value = $segmentProperty8Value;
    }

    /**
     * Returns Segment Property 9 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty9Value()
    {
        return $this->segmentProperty9Value;
    }

    /**
     * Sets Segment Property 9 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_9_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty9Value
     */
    public function setSegmentProperty9Value($segmentProperty9Value): void
    {
        $this->segmentProperty9Value = $segmentProperty9Value;
    }

    /**
     * Returns Segment Property 10 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @return string|float|int|null
     */
    public function getSegmentProperty10Value()
    {
        return $this->segmentProperty10Value;
    }

    /**
     * Sets Segment Property 10 Value.
     * A value that will occur in your events that you want to bill upon. For a boolean segmenting property,
     * send the value as a string, `"true"` or `"false"`.
     *
     * @maps segment_property_10_value
     * @mapsBy anyOf(oneOf(string,float,int),null)
     *
     * @param string|float|int|null $segmentProperty10Value
     */
    public function setSegmentProperty10Value($segmentProperty10Value): void
    {
        $this->segmentProperty10Value = $segmentProperty10Value;
    }

    /**
     * Returns Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     */
    public function getPricingScheme(): string
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     *
     * @required
     * @maps pricing_scheme
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue
     */
    public function setPricingScheme(string $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Prices.
     * The rates for this segment. Use one price for a flat rate, or several price brackets for a tiered,
     * volume or stairstep scheme.
     *
     * @return CreateOrUpdateSegmentPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     * The rates for this segment. Use one price for a flat rate, or several price brackets for a tiered,
     * volume or stairstep scheme.
     *
     * @required
     * @maps prices
     *
     * @param CreateOrUpdateSegmentPrice[] $prices
     */
    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * Converts the SubscriptionComponentCustomPriceSegment object to a human-readable string
     * representation.
     *
     * @return string The string representation of the SubscriptionComponentCustomPriceSegment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionComponentCustomPriceSegment',
            [
                'segmentProperty1Value' => $this->segmentProperty1Value,
                'segmentProperty2Value' => $this->segmentProperty2Value,
                'segmentProperty3Value' => $this->segmentProperty3Value,
                'segmentProperty4Value' => $this->segmentProperty4Value,
                'segmentProperty5Value' => $this->segmentProperty5Value,
                'segmentProperty6Value' => $this->segmentProperty6Value,
                'segmentProperty7Value' => $this->segmentProperty7Value,
                'segmentProperty8Value' => $this->segmentProperty8Value,
                'segmentProperty9Value' => $this->segmentProperty9Value,
                'segmentProperty10Value' => $this->segmentProperty10Value,
                'pricingScheme' => $this->pricingScheme,
                'prices' => $this->prices,
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
        if (isset($this->segmentProperty1Value)) {
            $json['segment_property_1_value']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty1Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        if (isset($this->segmentProperty2Value)) {
            $json['segment_property_2_value']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty2Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        if (isset($this->segmentProperty3Value)) {
            $json['segment_property_3_value']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty3Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        if (isset($this->segmentProperty4Value)) {
            $json['segment_property_4_value']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty4Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        if (isset($this->segmentProperty5Value)) {
            $json['segment_property_5_value']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty5Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        if (isset($this->segmentProperty6Value)) {
            $json['segment_property_6_value']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty6Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        if (isset($this->segmentProperty7Value)) {
            $json['segment_property_7_value']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty7Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        if (isset($this->segmentProperty8Value)) {
            $json['segment_property_8_value']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty8Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        if (isset($this->segmentProperty9Value)) {
            $json['segment_property_9_value']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty9Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        if (isset($this->segmentProperty10Value)) {
            $json['segment_property_10_value'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty10Value,
                    'anyOf(oneOf(string,float,int),null)'
                );
        }
        $json['pricing_scheme']                = PricingScheme::checkValue($this->pricingScheme);
        $json['prices']                        = $this->prices;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
