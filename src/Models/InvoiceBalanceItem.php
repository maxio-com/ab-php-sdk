<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceBalanceItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $number;

    /**
     * @var string|null
     */
    private $outstandingAmount;

    /**
     * Returns Uid.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Number.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     *
     * @maps number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns Outstanding Amount.
     */
    public function getOutstandingAmount(): ?string
    {
        return $this->outstandingAmount;
    }

    /**
     * Sets Outstanding Amount.
     *
     * @maps outstanding_amount
     */
    public function setOutstandingAmount(?string $outstandingAmount): void
    {
        $this->outstandingAmount = $outstandingAmount;
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
        if (isset($this->uid)) {
            $json['uid']                = $this->uid;
        }
        if (isset($this->number)) {
            $json['number']             = $this->number;
        }
        if (isset($this->outstandingAmount)) {
            $json['outstanding_amount'] = $this->outstandingAmount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
