<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateMultiInvoicePaymentRequest implements \JsonSerializable
{
    /**
     * @var CreateMultiInvoicePayment
     */
    private $payment;

    /**
     * @param CreateMultiInvoicePayment $payment
     */
    public function __construct(CreateMultiInvoicePayment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * Returns Payment.
     */
    public function getPayment(): CreateMultiInvoicePayment
    {
        return $this->payment;
    }

    /**
     * Sets Payment.
     *
     * @required
     * @maps payment
     */
    public function setPayment(CreateMultiInvoicePayment $payment): void
    {
        $this->payment = $payment;
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
        $json['payment'] = $this->payment;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
