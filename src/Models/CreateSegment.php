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

class CreateSegment implements \JsonSerializable
{
    /**
     * @var string|float|int|bool|null
     */
    private $segmentProperty1Value;

    /**
     * @var string|float|int|bool|null
     */
    private $segmentProperty2Value;

    /**
     * @var string|float|int|bool|null
     */
    private $segmentProperty3Value;

    /**
     * @var string|float|int|bool|null
     */
    private $segmentProperty4Value;

    /**
     * @var string
     */
    private $pricingScheme;

    /**
     * @var CreateOrUpdateSegmentPrice[]|null
     */
    private $prices;

    /**
     * @param string $pricingScheme
     */
    public function __construct(string $pricingScheme)
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Segment Property 1 Value.
     * A value that will occur in your events that you want to bill upon. The type of the value depends on
     * the property type in the related event based billing metric.
     *
     * @return string|float|int|bool|null
     */
    public function getSegmentProperty1Value()
    {
        return $this->segmentProperty1Value;
    }

    /**
     * Sets Segment Property 1 Value.
     * A value that will occur in your events that you want to bill upon. The type of the value depends on
     * the property type in the related event based billing metric.
     *
     * @maps segment_property_1_value
     * @mapsBy anyOf(oneOf(string,float,int,bool),null)
     *
     * @param string|float|int|bool|null $segmentProperty1Value
     */
    public function setSegmentProperty1Value($segmentProperty1Value): void
    {
        $this->segmentProperty1Value = $segmentProperty1Value;
    }

    /**
     * Returns Segment Property 2 Value.
     * A value that will occur in your events that you want to bill upon. The type of the value depends on
     * the property type in the related event based billing metric.
     *
     * @return string|float|int|bool|null
     */
    public function getSegmentProperty2Value()
    {
        return $this->segmentProperty2Value;
    }

    /**
     * Sets Segment Property 2 Value.
     * A value that will occur in your events that you want to bill upon. The type of the value depends on
     * the property type in the related event based billing metric.
     *
     * @maps segment_property_2_value
     * @mapsBy anyOf(oneOf(string,float,int,bool),null)
     *
     * @param string|float|int|bool|null $segmentProperty2Value
     */
    public function setSegmentProperty2Value($segmentProperty2Value): void
    {
        $this->segmentProperty2Value = $segmentProperty2Value;
    }

    /**
     * Returns Segment Property 3 Value.
     * A value that will occur in your events that you want to bill upon. The type of the value depends on
     * the property type in the related event based billing metric.
     *
     * @return string|float|int|bool|null
     */
    public function getSegmentProperty3Value()
    {
        return $this->segmentProperty3Value;
    }

    /**
     * Sets Segment Property 3 Value.
     * A value that will occur in your events that you want to bill upon. The type of the value depends on
     * the property type in the related event based billing metric.
     *
     * @maps segment_property_3_value
     * @mapsBy anyOf(oneOf(string,float,int,bool),null)
     *
     * @param string|float|int|bool|null $segmentProperty3Value
     */
    public function setSegmentProperty3Value($segmentProperty3Value): void
    {
        $this->segmentProperty3Value = $segmentProperty3Value;
    }

    /**
     * Returns Segment Property 4 Value.
     * A value that will occur in your events that you want to bill upon. The type of the value depends on
     * the property type in the related event based billing metric.
     *
     * @return string|float|int|bool|null
     */
    public function getSegmentProperty4Value()
    {
        return $this->segmentProperty4Value;
    }

    /**
     * Sets Segment Property 4 Value.
     * A value that will occur in your events that you want to bill upon. The type of the value depends on
     * the property type in the related event based billing metric.
     *
     * @maps segment_property_4_value
     * @mapsBy anyOf(oneOf(string,float,int,bool),null)
     *
     * @param string|float|int|bool|null $segmentProperty4Value
     */
    public function setSegmentProperty4Value($segmentProperty4Value): void
    {
        $this->segmentProperty4Value = $segmentProperty4Value;
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
     *
     * @return CreateOrUpdateSegmentPrice[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     *
     * @maps prices
     *
     * @param CreateOrUpdateSegmentPrice[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
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
        if (isset($this->segmentProperty1Value)) {
            $json['segment_property_1_value'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty1Value,
                    'anyOf(oneOf(string,float,int,bool),null)'
                );
        }
        if (isset($this->segmentProperty2Value)) {
            $json['segment_property_2_value'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty2Value,
                    'anyOf(oneOf(string,float,int,bool),null)'
                );
        }
        if (isset($this->segmentProperty3Value)) {
            $json['segment_property_3_value'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty3Value,
                    'anyOf(oneOf(string,float,int,bool),null)'
                );
        }
        if (isset($this->segmentProperty4Value)) {
            $json['segment_property_4_value'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty4Value,
                    'anyOf(oneOf(string,float,int,bool),null)'
                );
        }
        $json['pricing_scheme']               = PricingScheme::checkValue($this->pricingScheme);
        if (isset($this->prices)) {
            $json['prices']                   = $this->prices;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
