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
     * @var string
     */
    private $memo;

    /**
     * @param float|string $amount
     * @param string $memo
     */
    public function __construct($amount, string $memo)
    {
        $this->amount = $amount;
        $this->memo = $memo;
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
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @required
     * @maps memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
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
        $json['amount'] = ApiHelper::getJsonHelper()->verifyTypes($this->amount, 'oneOf(float,string)');
        $json['memo']   = $this->memo;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
