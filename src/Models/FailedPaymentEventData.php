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

/**
 * Example schema for an `failed_payment` event
 */
class FailedPaymentEventData implements \JsonSerializable
{
    /**
     * @var int
     */
    private $amountInCents;

    /**
     * @var int
     */
    private $appliedAmount;

    /**
     * @var array
     */
    private $memo = [];

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var int
     */
    private $transactionId;

    /**
     * @param int $amountInCents
     * @param int $appliedAmount
     * @param string $paymentMethod
     * @param int $transactionId
     */
    public function __construct(int $amountInCents, int $appliedAmount, string $paymentMethod, int $transactionId)
    {
        $this->amountInCents = $amountInCents;
        $this->appliedAmount = $appliedAmount;
        $this->paymentMethod = $paymentMethod;
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Amount in Cents.
     * The monetary value of the payment, expressed in cents.
     */
    public function getAmountInCents(): int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     * The monetary value of the payment, expressed in cents.
     *
     * @required
     * @maps amount_in_cents
     */
    public function setAmountInCents(int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Applied Amount.
     * The monetary value of the payment, expressed in dollars.
     */
    public function getAppliedAmount(): int
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The monetary value of the payment, expressed in dollars.
     *
     * @required
     * @maps applied_amount
     */
    public function setAppliedAmount(int $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Returns Memo.
     * The memo passed when the payment was created.
     */
    public function getMemo(): ?string
    {
        if (count($this->memo) == 0) {
            return null;
        }
        return $this->memo['value'];
    }

    /**
     * Sets Memo.
     * The memo passed when the payment was created.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     * The memo passed when the payment was created.
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
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
     * @factory \AdvancedBillingLib\Models\InvoicePaymentMethodType::checkValue
     */
    public function setPaymentMethod(string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Transaction Id.
     * The transaction ID of the failed payment.
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * The transaction ID of the failed payment.
     *
     * @required
     * @maps transaction_id
     */
    public function setTransactionId(int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Converts the FailedPaymentEventData object to a human-readable string representation.
     *
     * @return string The string representation of the FailedPaymentEventData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FailedPaymentEventData',
            [
                'amountInCents' => $this->amountInCents,
                'appliedAmount' => $this->appliedAmount,
                'memo' => $this->getMemo(),
                'paymentMethod' => $this->paymentMethod,
                'transactionId' => $this->transactionId,
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
        $json['amount_in_cents'] = $this->amountInCents;
        $json['applied_amount']  = $this->appliedAmount;
        if (!empty($this->memo)) {
            $json['memo']        = $this->memo['value'];
        }
        $json['payment_method']  = InvoicePaymentMethodType::checkValue($this->paymentMethod);
        $json['transaction_id']  = $this->transactionId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
