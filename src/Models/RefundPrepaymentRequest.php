<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class RefundPrepaymentRequest implements \JsonSerializable
{
    /**
     * @var RefundPrepayment
     */
    private $refund;

    /**
     * @param RefundPrepayment $refund
     */
    public function __construct(RefundPrepayment $refund)
    {
        $this->refund = $refund;
    }

    /**
     * Returns Refund.
     */
    public function getRefund(): RefundPrepayment
    {
        return $this->refund;
    }

    /**
     * Sets Refund.
     *
     * @required
     * @maps refund
     */
    public function setRefund(RefundPrepayment $refund): void
    {
        $this->refund = $refund;
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
        $json['refund'] = $this->refund;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
