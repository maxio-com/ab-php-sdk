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

/**
 * Example schema for an `apply_payment` event
 */
class ApplyPaymentEventData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $memo;

    /**
     * @var string
     */
    private $originalAmount;

    /**
     * @var string
     */
    private $appliedAmount;

    /**
     * @var \DateTime
     */
    private $transactionTime;

    /**
     * @var PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType
     */
    private $paymentMethod;

    /**
     * @var int|null
     */
    private $transactionId;

    /**
     * @param string $memo
     * @param string $originalAmount
     * @param string $appliedAmount
     * @param \DateTime $transactionTime
     * @param PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType $paymentMethod
     */
    public function __construct(
        string $memo,
        string $originalAmount,
        string $appliedAmount,
        \DateTime $transactionTime,
        $paymentMethod
    ) {
        $this->memo = $memo;
        $this->originalAmount = $originalAmount;
        $this->appliedAmount = $appliedAmount;
        $this->transactionTime = $transactionTime;
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Memo.
     * The payment memo
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The payment memo
     *
     * @required
     * @maps memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Original Amount.
     * The full, original amount of the payment transaction as a string in full units. Incoming payments
     * can be split amongst several invoices, which will result in a `applied_amount` less than the
     * `original_amount`. Example: A $100.99 payment, of which $40.11 is applied to this invoice, will have
     * an `original_amount` of `"100.99"`.
     */
    public function getOriginalAmount(): string
    {
        return $this->originalAmount;
    }

    /**
     * Sets Original Amount.
     * The full, original amount of the payment transaction as a string in full units. Incoming payments
     * can be split amongst several invoices, which will result in a `applied_amount` less than the
     * `original_amount`. Example: A $100.99 payment, of which $40.11 is applied to this invoice, will have
     * an `original_amount` of `"100.99"`.
     *
     * @required
     * @maps original_amount
     */
    public function setOriginalAmount(string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * Returns Applied Amount.
     * The amount of the payment applied to this invoice. Incoming payments can be split amongst several
     * invoices, which will result in a `applied_amount` less than the `original_amount`. Example: A $100.
     * 99 payment, of which $40.11 is applied to this invoice, will have an `applied_amount` of `"40.11"`.
     */
    public function getAppliedAmount(): string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The amount of the payment applied to this invoice. Incoming payments can be split amongst several
     * invoices, which will result in a `applied_amount` less than the `original_amount`. Example: A $100.
     * 99 payment, of which $40.11 is applied to this invoice, will have an `applied_amount` of `"40.11"`.
     *
     * @required
     * @maps applied_amount
     */
    public function setAppliedAmount(string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Returns Transaction Time.
     * The time the payment was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     */
    public function getTransactionTime(): \DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     * The time the payment was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     *
     * @required
     * @maps transaction_time
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionTime(\DateTime $transactionTime): void
    {
        $this->transactionTime = $transactionTime;
    }

    /**
     * Returns Payment Method.
     * A nested data structure detailing the method of payment
     *
     * @return PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     * A nested data structure detailing the method of payment
     *
     * @required
     * @maps payment_method
     * @mapsBy anyOf(PaymentMethodApplePayType,PaymentMethodBankAccountType,PaymentMethodCreditCardType,PaymentMethodExternalType,PaymentMethodPaypalType)
     *
     * @param PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType $paymentMethod
     */
    public function setPaymentMethod($paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Transaction Id.
     * The Chargify id of the original payment
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * The Chargify id of the original payment
     *
     * @maps transaction_id
     */
    public function setTransactionId(?int $transactionId): void
    {
        $this->transactionId = $transactionId;
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
        $json['memo']               = $this->memo;
        $json['original_amount']    = $this->originalAmount;
        $json['applied_amount']     = $this->appliedAmount;
        $json['transaction_time']   = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        $json['payment_method']     =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->paymentMethod,
                'anyOf(PaymentMethodApplePayType,PaymentMethodBankAccountType,PaymentMethodCreditCard' .
                'Type,PaymentMethodExternalType,PaymentMethodPaypalType)'
            );
        if (isset($this->transactionId)) {
            $json['transaction_id'] = $this->transactionId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
