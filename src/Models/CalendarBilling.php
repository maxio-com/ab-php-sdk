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
     * @var int|string|null
     */
    private $snapDay;

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
        return $this->snapDay;
    }

    /**
     * Sets Snap Day.
     * A day of month that subscription will be processed on. Can be 1 up to 28 or 'end'.
     *
     * @maps snap_day
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $snapDay
     */
    public function setSnapDay($snapDay): void
    {
        $this->snapDay = $snapDay;
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
        if (isset($this->snapDay)) {
            $json['snap_day']                      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->snapDay,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (isset($this->calendarBillingFirstCharge)) {
            $json['calendar_billing_first_charge'] = FirstChargeType::checkValue($this->calendarBillingFirstCharge);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
