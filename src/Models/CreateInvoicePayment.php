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

class CreateInvoicePayment implements \JsonSerializable
{
    /**
     * @var string|float|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $method = InvoicePaymentMethodType::OTHER;

    /**
     * @var string|null
     */
    private $details;

    /**
     * Returns Amount.
     * A string of the dollar amount to be refunded (eg. "10.50" => $10.50)
     *
     * @return string|float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * A string of the dollar amount to be refunded (eg. "10.50" => $10.50)
     *
     * @maps amount
     * @mapsBy anyOf(oneOf(string,float),null)
     *
     * @param string|float|null $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Memo.
     * A description to be attached to the payment.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * A description to be attached to the payment.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Method.
     * The type of payment method used.
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * Sets Method.
     * The type of payment method used.
     *
     * @maps method
     * @factory \AdvancedBillingLib\Models\InvoicePaymentMethodType::checkValue
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    /**
     * Returns Details.
     * Additional information related to the payment method (eg. Check #)
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * Sets Details.
     * Additional information related to the payment method (eg. Check #)
     *
     * @maps details
     */
    public function setDetails(?string $details): void
    {
        $this->details = $details;
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
        if (isset($this->amount)) {
            $json['amount']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->amount,
                    'anyOf(oneOf(string,float),null)'
                );
        }
        if (isset($this->memo)) {
            $json['memo']    = $this->memo;
        }
        if (isset($this->method)) {
            $json['method']  = InvoicePaymentMethodType::checkValue($this->method);
        }
        if (isset($this->details)) {
            $json['details'] = $this->details;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
