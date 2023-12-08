<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class MultiInvoicePaymentResponse implements \JsonSerializable
{
    /**
     * @var MultiInvoicePayment
     */
    private $payment;

    /**
     * @param MultiInvoicePayment $payment
     */
    public function __construct(MultiInvoicePayment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * Returns Payment.
     */
    public function getPayment(): MultiInvoicePayment
    {
        return $this->payment;
    }

    /**
     * Sets Payment.
     *
     * @required
     * @maps payment
     */
    public function setPayment(MultiInvoicePayment $payment): void
    {
        $this->payment = $payment;
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
        $json['payment'] = $this->payment;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
