<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateReasonCodeRequest implements \JsonSerializable
{
    /**
     * @var CreateReasonCode
     */
    private $reasonCode;

    /**
     * @param CreateReasonCode $reasonCode
     */
    public function __construct(CreateReasonCode $reasonCode)
    {
        $this->reasonCode = $reasonCode;
    }

    /**
     * Returns Reason Code.
     */
    public function getReasonCode(): CreateReasonCode
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     *
     * @required
     * @maps reason_code
     */
    public function setReasonCode(CreateReasonCode $reasonCode): void
    {
        $this->reasonCode = $reasonCode;
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
        $json['reason_code'] = $this->reasonCode;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
