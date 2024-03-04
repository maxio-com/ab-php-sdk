<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceRefund implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $transactionId;

    /**
     * @var int|null
     */
    private $paymentId;

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
     * @var array
     */
    private $gatewayTransactionId = [];

    /**
     * @var string|null
     */
    private $gatewayUsed;

    /**
     * @var array
     */
    private $gatewayHandle = [];

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
     * Returns Payment Id.
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }

    /**
     * Sets Payment Id.
     *
     * @maps payment_id
     */
    public function setPaymentId(?int $paymentId): void
    {
        $this->paymentId = $paymentId;
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
     * Returns Gateway Transaction Id.
     * The transaction ID for the refund as returned from the payment gateway
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
     * The transaction ID for the refund as returned from the payment gateway
     *
     * @maps gateway_transaction_id
     */
    public function setGatewayTransactionId(?string $gatewayTransactionId): void
    {
        $this->gatewayTransactionId['value'] = $gatewayTransactionId;
    }

    /**
     * Unsets Gateway Transaction Id.
     * The transaction ID for the refund as returned from the payment gateway
     */
    public function unsetGatewayTransactionId(): void
    {
        $this->gatewayTransactionId = [];
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
        if (isset($this->transactionId)) {
            $json['transaction_id']         = $this->transactionId;
        }
        if (isset($this->paymentId)) {
            $json['payment_id']             = $this->paymentId;
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
        if (!empty($this->gatewayTransactionId)) {
            $json['gateway_transaction_id'] = $this->gatewayTransactionId['value'];
        }
        if (isset($this->gatewayUsed)) {
            $json['gateway_used']           = $this->gatewayUsed;
        }
        if (!empty($this->gatewayHandle)) {
            $json['gateway_handle']         = $this->gatewayHandle['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
