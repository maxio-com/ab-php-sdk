<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateUsage implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $quantity;

    /**
     * @var string|null
     */
    private $pricePointId;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var BillingSchedule|null
     */
    private $billingSchedule;

    /**
     * Returns Quantity.
     * integer by default or decimal number if fractional quantities are enabled for the component
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * integer by default or decimal number if fractional quantities are enabled for the component
     *
     * @maps quantity
     */
    public function setQuantity(?float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): ?string
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?string $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
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
        if (isset($this->quantity)) {
            $json['quantity']         = $this->quantity;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']   = $this->pricePointId;
        }
        if (isset($this->memo)) {
            $json['memo']             = $this->memo;
        }
        if (isset($this->billingSchedule)) {
            $json['billing_schedule'] = $this->billingSchedule;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
