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

class IssueServiceCredit implements \JsonSerializable
{
    /**
     * @var float|string
     */
    private $amount;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @param float|string $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Returns Amount.
     *
     * @return float|string
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
     * @mapsBy oneOf(float,string)
     *
     * @param float|string $amount
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
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        $json['amount']   = ApiHelper::getJsonHelper()->verifyTypes($this->amount, 'oneOf(float,string)');
        if (isset($this->memo)) {
            $json['memo'] = $this->memo;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
