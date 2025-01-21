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
     * The type of payment method used. Defaults to other.
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     * The type of payment method used. Defaults to other.
     *
     * @required
     * @maps payment_method
     * @factory \AdvancedBillingLib\Models\InvoicePaymentMethodType::checkValue
     */
    public function setPaymentMethod(string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Converts the CreatePayment object to a human-readable string representation.
     *
     * @return string The string representation of the CreatePayment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreatePayment',
            [
                'amount' => $this->amount,
                'memo' => $this->memo,
                'paymentDetails' => $this->paymentDetails,
                'paymentMethod' => $this->paymentMethod,
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
        $json['amount']          = $this->amount;
        $json['memo']            = $this->memo;
        $json['payment_details'] = $this->paymentDetails;
        $json['payment_method']  = InvoicePaymentMethodType::checkValue($this->paymentMethod);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
