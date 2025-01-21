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

class ActivateEventBasedComponent implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var BillingSchedule|null
     */
    private $billingSchedule;

    /**
     * @var ComponentCustomPrice|null
     */
    private $customPrice;

    /**
     * Returns Price Point Id.
     * The Chargify id of the price point
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     * The Chargify id of the price point
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Billing Schedule.
     * This attribute is particularly useful when you need to align billing events for different components
     * on distinct schedules within a subscription. Please note this only works for site with
     * Multifrequency enabled
     */
    public function getBillingSchedule(): ?BillingSchedule
    {
        return $this->billingSchedule;
    }

    /**
     * Sets Billing Schedule.
     * This attribute is particularly useful when you need to align billing events for different components
     * on distinct schedules within a subscription. Please note this only works for site with
     * Multifrequency enabled
     *
     * @maps billing_schedule
     */
    public function setBillingSchedule(?BillingSchedule $billingSchedule): void
    {
        $this->billingSchedule = $billingSchedule;
    }

    /**
     * Returns Custom Price.
     * Create or update custom pricing unique to the subscription. Used in place of `price_point_id`.
     */
    public function getCustomPrice(): ?ComponentCustomPrice
    {
        return $this->customPrice;
    }

    /**
     * Sets Custom Price.
     * Create or update custom pricing unique to the subscription. Used in place of `price_point_id`.
     *
     * @maps custom_price
     */
    public function setCustomPrice(?ComponentCustomPrice $customPrice): void
    {
        $this->customPrice = $customPrice;
    }

    /**
     * Converts the ActivateEventBasedComponent object to a human-readable string representation.
     *
     * @return string The string representation of the ActivateEventBasedComponent object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ActivateEventBasedComponent',
            [
                'pricePointId' => $this->pricePointId,
                'billingSchedule' => $this->billingSchedule,
                'customPrice' => $this->customPrice,
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
        if (isset($this->pricePointId)) {
            $json['price_point_id']   = $this->pricePointId;
        }
        if (isset($this->billingSchedule)) {
            $json['billing_schedule'] = $this->billingSchedule;
        }
        if (isset($this->customPrice)) {
            $json['custom_price']     = $this->customPrice;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
