<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Optional attributes related to billing date and accrual. Note: Only applicable for new subscriptions.
 */
class GroupBilling implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $accrue = false;

    /**
     * @var bool|null
     */
    private $alignDate = false;

    /**
     * @var bool|null
     */
    private $prorate = false;

    /**
     * Returns Accrue.
     * A flag indicating whether or not to accrue charges on the new subscription.
     */
    public function getAccrue(): ?bool
    {
        return $this->accrue;
    }

    /**
     * Sets Accrue.
     * A flag indicating whether or not to accrue charges on the new subscription.
     *
     * @maps accrue
     */
    public function setAccrue(?bool $accrue): void
    {
        $this->accrue = $accrue;
    }

    /**
     * Returns Align Date.
     * A flag indicating whether or not to align the billing date of the new subscription with the billing
     * date of the primary subscription of the hierarchy's default subscription group. Required to be true
     * if prorate is also true.
     */
    public function getAlignDate(): ?bool
    {
        return $this->alignDate;
    }

    /**
     * Sets Align Date.
     * A flag indicating whether or not to align the billing date of the new subscription with the billing
     * date of the primary subscription of the hierarchy's default subscription group. Required to be true
     * if prorate is also true.
     *
     * @maps align_date
     */
    public function setAlignDate(?bool $alignDate): void
    {
        $this->alignDate = $alignDate;
    }

    /**
     * Returns Prorate.
     * A flag indicating whether or not to prorate billing of the new subscription for the current period.
     * A value of true is ignored unless align_date is also true.
     */
    public function getProrate(): ?bool
    {
        return $this->prorate;
    }

    /**
     * Sets Prorate.
     * A flag indicating whether or not to prorate billing of the new subscription for the current period.
     * A value of true is ignored unless align_date is also true.
     *
     * @maps prorate
     */
    public function setProrate(?bool $prorate): void
    {
        $this->prorate = $prorate;
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
        if (isset($this->accrue)) {
            $json['accrue']     = $this->accrue;
        }
        if (isset($this->alignDate)) {
            $json['align_date'] = $this->alignDate;
        }
        if (isset($this->prorate)) {
            $json['prorate']    = $this->prorate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
