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

class DeductServiceCredit implements \JsonSerializable
{
    /**
     * @var string|float
     */
    private $amount;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @param string|float $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Returns Amount.
     *
     * @return string|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @required
     * @maps amount
     * @mapsBy oneOf(string,float)
     *
     * @param string|float $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
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
        $json['amount']   = ApiHelper::getJsonHelper()->verifyTypes($this->amount, 'oneOf(string,float)');
        if (isset($this->memo)) {
            $json['memo'] = $this->memo;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
