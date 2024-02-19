<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class Segment implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var int|null
     */
    private $eventBasedBillingMetricId;

    /**
     * @var string|null
     */
    private $pricingScheme;

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
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var SegmentPrice[]|null
     */
    private $prices;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Component Id.
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Event Based Billing Metric Id.
     */
    public function getEventBasedBillingMetricId(): ?int
    {
        return $this->eventBasedBillingMetricId;
    }

    /**
     * Sets Event Based Billing Metric Id.
     *
     * @maps event_based_billing_metric_id
     */
    public function setEventBasedBillingMetricId(?int $eventBasedBillingMetricId): void
    {
        $this->eventBasedBillingMetricId = $eventBasedBillingMetricId;
    }

    /**
     * Returns Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     */
    public function getPricingScheme(): ?string
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     *
     * @maps pricing_scheme
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue
     */
    public function setPricingScheme(?string $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Segment Property 1 Value.
     *
     * @return string|float|int|bool|null
     */
    public function getSegmentProperty1Value()
    {
        return $this->segmentProperty1Value;
    }

    /**
     * Sets Segment Property 1 Value.
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
     *
     * @return string|float|int|bool|null
     */
    public function getSegmentProperty2Value()
    {
        return $this->segmentProperty2Value;
    }

    /**
     * Sets Segment Property 2 Value.
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
     *
     * @return string|float|int|bool|null
     */
    public function getSegmentProperty3Value()
    {
        return $this->segmentProperty3Value;
    }

    /**
     * Sets Segment Property 3 Value.
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
     *
     * @return string|float|int|bool|null
     */
    public function getSegmentProperty4Value()
    {
        return $this->segmentProperty4Value;
    }

    /**
     * Sets Segment Property 4 Value.
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
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Prices.
     *
     * @return SegmentPrice[]|null
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
     * @param SegmentPrice[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
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
        if (isset($this->id)) {
            $json['id']                            = $this->id;
        }
        if (isset($this->componentId)) {
            $json['component_id']                  = $this->componentId;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']                = $this->pricePointId;
        }
        if (isset($this->eventBasedBillingMetricId)) {
            $json['event_based_billing_metric_id'] = $this->eventBasedBillingMetricId;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']                = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->segmentProperty1Value)) {
            $json['segment_property_1_value']      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty1Value,
                    'anyOf(oneOf(string,float,int,bool),null)'
                );
        }
        if (isset($this->segmentProperty2Value)) {
            $json['segment_property_2_value']      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty2Value,
                    'anyOf(oneOf(string,float,int,bool),null)'
                );
        }
        if (isset($this->segmentProperty3Value)) {
            $json['segment_property_3_value']      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty3Value,
                    'anyOf(oneOf(string,float,int,bool),null)'
                );
        }
        if (isset($this->segmentProperty4Value)) {
            $json['segment_property_4_value']      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->segmentProperty4Value,
                    'anyOf(oneOf(string,float,int,bool),null)'
                );
        }
        if (isset($this->createdAt)) {
            $json['created_at']                    = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                    = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (isset($this->prices)) {
            $json['prices']                        = $this->prices;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
