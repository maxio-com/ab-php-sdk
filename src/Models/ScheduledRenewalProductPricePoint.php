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
 * Custom pricing for a product within a scheduled renewal.
 */
class ScheduledRenewalProductPricePoint implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var string|int
     */
    private $priceInCents;

    /**
     * @var string|int
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalUnit;

    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @var int|null
     */
    private $initialChargeInCents;

    /**
     * @var int|null
     */
    private $expirationInterval;

    /**
     * @var array
     */
    private $expirationIntervalUnit = [];

    /**
     * @param string|int $priceInCents
     * @param string|int $interval
     */
    public function __construct($priceInCents, $interval)
    {
        $this->priceInCents = $priceInCents;
        $this->interval = $interval;
    }

    /**
     * Returns Name.
     * (Optional)
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * (Optional)
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     * (Optional)
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     * (Optional)
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Price in Cents.
     * Required if using `custom_price` attribute.
     *
     * @return string|int
     */
    public function getPriceInCents()
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     * Required if using `custom_price` attribute.
     *
     * @required
     * @maps price_in_cents
     * @mapsBy oneOf(string,int)
     *
     * @param string|int $priceInCents
     */
    public function setPriceInCents($priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    /**
     * Returns Interval.
     * Required if using `custom_price` attribute.
     *
     * @return string|int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * Required if using `custom_price` attribute.
     *
     * @required
     * @maps interval
     * @mapsBy oneOf(string,int)
     *
     * @param string|int $interval
     */
    public function setInterval($interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * Required if using `custom_price` attribute.
     */
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     * Required if using `custom_price` attribute.
     *
     * @maps interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setIntervalUnit(?string $intervalUnit): void
    {
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Tax Included.
     * (Optional)
     */
    public function getTaxIncluded(): ?bool
    {
        return $this->taxIncluded;
    }

    /**
     * Sets Tax Included.
     * (Optional)
     *
     * @maps tax_included
     */
    public function setTaxIncluded(?bool $taxIncluded): void
    {
        $this->taxIncluded = $taxIncluded;
    }

    /**
     * Returns Initial Charge in Cents.
     * The product price point initial charge, in integer cents.
     */
    public function getInitialChargeInCents(): ?int
    {
        return $this->initialChargeInCents;
    }

    /**
     * Sets Initial Charge in Cents.
     * The product price point initial charge, in integer cents.
     *
     * @maps initial_charge_in_cents
     */
    public function setInitialChargeInCents(?int $initialChargeInCents): void
    {
        $this->initialChargeInCents = $initialChargeInCents;
    }

    /**
     * Returns Expiration Interval.
     * The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an
     * expiration_interval_unit of day would mean this product price point would expire after 30 days.
     */
    public function getExpirationInterval(): ?int
    {
        return $this->expirationInterval;
    }

    /**
     * Sets Expiration Interval.
     * The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an
     * expiration_interval_unit of day would mean this product price point would expire after 30 days.
     *
     * @maps expiration_interval
     */
    public function setExpirationInterval(?int $expirationInterval): void
    {
        $this->expirationInterval = $expirationInterval;
    }

    /**
     * Returns Expiration Interval Unit.
     * A string representing the expiration interval unit for this product price point, either month, day
     * or never
     */
    public function getExpirationIntervalUnit(): ?string
    {
        if (count($this->expirationIntervalUnit) == 0) {
            return null;
        }
        return $this->expirationIntervalUnit['value'];
    }

    /**
     * Sets Expiration Interval Unit.
     * A string representing the expiration interval unit for this product price point, either month, day
     * or never
     *
     * @maps expiration_interval_unit
     * @factory \AdvancedBillingLib\Models\ExpirationIntervalUnit::checkValue
     */
    public function setExpirationIntervalUnit(?string $expirationIntervalUnit): void
    {
        $this->expirationIntervalUnit['value'] = $expirationIntervalUnit;
    }

    /**
     * Unsets Expiration Interval Unit.
     * A string representing the expiration interval unit for this product price point, either month, day
     * or never
     */
    public function unsetExpirationIntervalUnit(): void
    {
        $this->expirationIntervalUnit = [];
    }

    /**
     * Converts the ScheduledRenewalProductPricePoint object to a human-readable string representation.
     *
     * @return string The string representation of the ScheduledRenewalProductPricePoint object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ScheduledRenewalProductPricePoint',
            [
                'name' => $this->name,
                'handle' => $this->handle,
                'priceInCents' => $this->priceInCents,
                'interval' => $this->interval,
                'intervalUnit' => $this->intervalUnit,
                'taxIncluded' => $this->taxIncluded,
                'initialChargeInCents' => $this->initialChargeInCents,
                'expirationInterval' => $this->expirationInterval,
                'expirationIntervalUnit' => $this->getExpirationIntervalUnit(),
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
        if (isset($this->name)) {
            $json['name']                     = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                   = $this->handle;
        }
        $json['price_in_cents']               =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->priceInCents,
                'oneOf(string,int)'
            );
        $json['interval']                     =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->interval,
                'oneOf(string,int)'
            );
        $json['interval_unit']                = IntervalUnit::checkValue($this->intervalUnit);
        if (isset($this->taxIncluded)) {
            $json['tax_included']             = $this->taxIncluded;
        }
        if (isset($this->initialChargeInCents)) {
            $json['initial_charge_in_cents']  = $this->initialChargeInCents;
        }
        if (isset($this->expirationInterval)) {
            $json['expiration_interval']      = $this->expirationInterval;
        }
        if (!empty($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit'] =
                ExpirationIntervalUnit::checkValue(
                    $this->expirationIntervalUnit['value']
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
