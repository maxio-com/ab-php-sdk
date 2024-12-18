<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class InvoicePayment implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $transactionTime;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $originalAmount;

    /**
     * @var string|null
     */
    private $appliedAmount;

    /**
     * @var InvoicePaymentMethod|null
     */
    private $paymentMethod;

    /**
     * @var int|null
     */
    private $transactionId;

    /**
     * @var bool|null
     */
    private $prepayment;

    /**
     * @var array
     */
    private $gatewayHandle = [];

    /**
     * @var string|null
     */
    private $gatewayUsed;

    /**
     * @var array
     */
    private $gatewayTransactionId = [];

    /**
     * @var array
     */
    private $receivedOn = [];

    /**
     * @var string|null
     */
    private $uid;

    /**
     * Returns Transaction Time.
     */
    public function getTransactionTime(): ?\DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     *
     * @maps transaction_time
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionTime(?\DateTime $transactionTime): void
    {
        $this->transactionTime = $transactionTime;
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

    /**
     * Returns Original Amount.
     */
    public function getOriginalAmount(): ?string
    {
        return $this->originalAmount;
    }

    /**
     * Sets Original Amount.
     *
     * @maps original_amount
     */
    public function setOriginalAmount(?string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * Returns Applied Amount.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Returns Payment Method.
     */
    public function getPaymentMethod(): ?InvoicePaymentMethod
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     *
     * @maps payment_method
     */
    public function setPaymentMethod(?InvoicePaymentMethod $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Transaction Id.
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     *
     * @maps transaction_id
     */
    public function setTransactionId(?int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Prepayment.
     */
    public function getPrepayment(): ?bool
    {
        return $this->prepayment;
    }

    /**
     * Sets Prepayment.
     *
     * @maps prepayment
     */
    public function setPrepayment(?bool $prepayment): void
    {
        $this->prepayment = $prepayment;
    }

    /**
     * Returns Gateway Handle.
     */
    public function getGatewayHandle(): ?string
    {
        if (count($this->gatewayHandle) == 0) {
            return null;
        }
        return $this->gatewayHandle['value'];
    }

    /**
     * Sets Gateway Handle.
     *
     * @maps gateway_handle
     */
    public function setGatewayHandle(?string $gatewayHandle): void
    {
        $this->gatewayHandle['value'] = $gatewayHandle;
    }

    /**
     * Unsets Gateway Handle.
     */
    public function unsetGatewayHandle(): void
    {
        $this->gatewayHandle = [];
    }

    /**
     * Returns Gateway Used.
     */
    public function getGatewayUsed(): ?string
    {
        return $this->gatewayUsed;
    }

    /**
     * Sets Gateway Used.
     *
     * @maps gateway_used
     */
    public function setGatewayUsed(?string $gatewayUsed): void
    {
        $this->gatewayUsed = $gatewayUsed;
    }

    /**
     * Returns Gateway Transaction Id.
     * The transaction ID for the payment as returned from the payment gateway
     */
    public function getGatewayTransactionId(): ?string
    {
        if (count($this->gatewayTransactionId) == 0) {
            return null;
        }
        return $this->gatewayTransactionId['value'];
    }

    /**
     * Sets Gateway Transaction Id.
     * The transaction ID for the payment as returned from the payment gateway
     *
     * @maps gateway_transaction_id
     */
    public function setGatewayTransactionId(?string $gatewayTransactionId): void
    {
        $this->gatewayTransactionId['value'] = $gatewayTransactionId;
    }

    /**
     * Unsets Gateway Transaction Id.
     * The transaction ID for the payment as returned from the payment gateway
     */
    public function unsetGatewayTransactionId(): void
    {
        $this->gatewayTransactionId = [];
    }

    /**
     * Returns Received On.
     * Date reflecting when the payment was received from a customer. Must be in the past. Applicable only
     * to
     * `external` payments.
     */
    public function getReceivedOn(): ?\DateTime
    {
        if (count($this->receivedOn) == 0) {
            return null;
        }
        return $this->receivedOn['value'];
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
        $this->receivedOn['value'] = $receivedOn;
    }

    /**
     * Unsets Received On.
     * Date reflecting when the payment was received from a customer. Must be in the past. Applicable only
     * to
     * `external` payments.
     */
    public function unsetReceivedOn(): void
    {
        $this->receivedOn = [];
    }

    /**
     * Returns Uid.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
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
        if (isset($this->transactionTime)) {
            $json['transaction_time']       = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        }
        if (isset($this->memo)) {
            $json['memo']                   = $this->memo;
        }
        if (isset($this->originalAmount)) {
            $json['original_amount']        = $this->originalAmount;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']         = $this->appliedAmount;
        }
        if (isset($this->paymentMethod)) {
            $json['payment_method']         = $this->paymentMethod;
        }
        if (isset($this->transactionId)) {
            $json['transaction_id']         = $this->transactionId;
        }
        if (isset($this->prepayment)) {
            $json['prepayment']             = $this->prepayment;
        }
        if (!empty($this->gatewayHandle)) {
            $json['gateway_handle']         = $this->gatewayHandle['value'];
        }
        if (isset($this->gatewayUsed)) {
            $json['gateway_used']           = $this->gatewayUsed;
        }
        if (!empty($this->gatewayTransactionId)) {
            $json['gateway_transaction_id'] = $this->gatewayTransactionId['value'];
        }
        if (!empty($this->receivedOn)) {
            $json['received_on']            = DateTimeHelper::toSimpleDate($this->receivedOn['value']);
        }
        if (isset($this->uid)) {
            $json['uid']                    = $this->uid;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
