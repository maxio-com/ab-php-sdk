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
 * (Optional). Cannot be used when also specifying next_billing_at
 */
class CalendarBilling implements \JsonSerializable
{
    /**
     * @var array
     */
    private $snapDay = [];

    /**
     * @var string|null
     */
    private $calendarBillingFirstCharge;

    /**
     * Returns Snap Day.
     * A day of month that subscription will be processed on. Can be 1 up to 28 or 'end'.
     *
     * @return int|string|null
     */
    public function getSnapDay()
    {
        if (count($this->snapDay) == 0) {
            return null;
        }
        return $this->snapDay['value'];
    }

    /**
     * Sets Snap Day.
     * A day of month that subscription will be processed on. Can be 1 up to 28 or 'end'.
     *
     * @maps snap_day
     * @mapsBy anyOf(oneOf(int,SnapDay),null)
     * @factory \AdvancedBillingLib\Models\SnapDay::checkValue SnapDay
     *
     * @param int|string|null $snapDay
     */
    public function setSnapDay($snapDay): void
    {
        $this->snapDay['value'] = $snapDay;
    }

    /**
     * Unsets Snap Day.
     * A day of month that subscription will be processed on. Can be 1 up to 28 or 'end'.
     */
    public function unsetSnapDay(): void
    {
        $this->snapDay = [];
    }

    /**
     * Returns Calendar Billing First Charge.
     */
    public function getCalendarBillingFirstCharge(): ?string
    {
        return $this->calendarBillingFirstCharge;
    }

    /**
     * Sets Calendar Billing First Charge.
     *
     * @maps calendar_billing_first_charge
     * @factory \AdvancedBillingLib\Models\FirstChargeType::checkValue
     */
    public function setCalendarBillingFirstCharge(?string $calendarBillingFirstCharge): void
    {
        $this->calendarBillingFirstCharge = $calendarBillingFirstCharge;
    }

    /**
     * Converts the CalendarBilling object to a human-readable string representation.
     *
     * @return string The string representation of the CalendarBilling object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CalendarBilling',
            [
                'snapDay' => $this->getSnapDay(),
                'calendarBillingFirstCharge' => $this->calendarBillingFirstCharge,
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
        if (!empty($this->snapDay)) {
            $json['snap_day']                      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->snapDay['value'],
                    'anyOf(oneOf(int,SnapDay),null)',
                    [
                        '\AdvancedBillingLib\Models\SnapDay::checkValue SnapDay'
                    ]
                );
        }
        if (isset($this->calendarBillingFirstCharge)) {
            $json['calendar_billing_first_charge'] = FirstChargeType::checkValue($this->calendarBillingFirstCharge);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
