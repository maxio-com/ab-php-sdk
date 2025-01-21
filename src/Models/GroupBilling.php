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
     * Converts the GroupBilling object to a human-readable string representation.
     *
     * @return string The string representation of the GroupBilling object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GroupBilling',
            [
                'accrue' => $this->accrue,
                'alignDate' => $this->alignDate,
                'prorate' => $this->prorate,
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
        if (isset($this->accrue)) {
            $json['accrue']     = $this->accrue;
        }
        if (isset($this->alignDate)) {
            $json['align_date'] = $this->alignDate;
        }
        if (isset($this->prorate)) {
            $json['prorate']    = $this->prorate;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
