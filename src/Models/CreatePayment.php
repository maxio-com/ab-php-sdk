<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreatePayment implements \JsonSerializable
{
    /**
     * @var string
     */
    private $amount;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var string
     */
    private $paymentDetails;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @param string $amount
     * @param string $memo
     * @param string $paymentDetails
     * @param string $paymentMethod
     */
    public function __construct(string $amount, string $memo, string $paymentDetails, string $paymentMethod)
    {
        $this->amount = $amount;
        $this->memo = $memo;
        $this->paymentDetails = $paymentDetails;
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @required
     * @maps amount
     */
    public function setAmount(string $amount): void
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
     * Returns Payment Details.
     */
    public function getPaymentDetails(): string
    {
        return $this->paymentDetails;
    }

    /**
     * Sets Payment Details.
     *
     * @required
     * @maps payment_details
     */
    public function setPaymentDetails(string $paymentDetails): void
    {
        $this->paymentDetails = $paymentDetails;
    }

    /**
     * Returns Payment Method.
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     *
     * @required
     * @maps payment_method
     */
    public function setPaymentMethod(string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
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
        $json['amount']          = $this->amount;
        $json['memo']            = $this->memo;
        $json['payment_details'] = $this->paymentDetails;
        $json['payment_method']  = $this->paymentMethod;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
