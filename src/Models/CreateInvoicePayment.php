<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
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
    private $method;

    /**
     * @var string|null
     */
    private $details;

    /**
     * @var int|null
     */
    private $paymentProfileId;

    /**
     * @var \DateTime|null
     */
    private $receivedOn;

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
     * A description to be attached to the payment. Applicable only to `external` payments.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * A description to be attached to the payment. Applicable only to `external` payments.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Method.
     * The type of payment method used. Defaults to other.
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * Sets Method.
     * The type of payment method used. Defaults to other.
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
     * Additional information related to the payment method (eg. Check #). Applicable only to `external`
     * payments.
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * Sets Details.
     * Additional information related to the payment method (eg. Check #). Applicable only to `external`
     * payments.
     *
     * @maps details
     */
    public function setDetails(?string $details): void
    {
        $this->details = $details;
    }

    /**
     * Returns Payment Profile Id.
     * The ID of the payment profile to be used for the payment.
     */
    public function getPaymentProfileId(): ?int
    {
        return $this->paymentProfileId;
    }

    /**
     * Sets Payment Profile Id.
     * The ID of the payment profile to be used for the payment.
     *
     * @maps payment_profile_id
     */
    public function setPaymentProfileId(?int $paymentProfileId): void
    {
        $this->paymentProfileId = $paymentProfileId;
    }

    /**
     * Returns Received On.
     * Date reflecting when the payment was received from a customer. Must be in the past. Applicable only
     * to
     * `external` payments.
     */
    public function getReceivedOn(): ?\DateTime
    {
        return $this->receivedOn;
    }

    /**
     * Sets Received On.
     * Date reflecting when the payment was received from a customer. Must be in the past. Applicable only
     * to
     * `external` payments.
     *
     * @maps received_on
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setReceivedOn(?\DateTime $receivedOn): void
    {
        $this->receivedOn = $receivedOn;
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
        if (isset($this->amount)) {
            $json['amount']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->amount,
                    'anyOf(oneOf(string,float),null)'
                );
        }
        if (isset($this->memo)) {
            $json['memo']               = $this->memo;
        }
        if (isset($this->method)) {
            $json['method']             = InvoicePaymentMethodType::checkValue($this->method);
        }
        if (isset($this->details)) {
            $json['details']            = $this->details;
        }
        if (isset($this->paymentProfileId)) {
            $json['payment_profile_id'] = $this->paymentProfileId;
        }
        if (isset($this->receivedOn)) {
            $json['received_on']        = DateTimeHelper::toSimpleDate($this->receivedOn);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
