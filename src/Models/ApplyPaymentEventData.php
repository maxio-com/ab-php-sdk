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
     * @var \DateTime|null
     */
    private $transactionTime;

    /**
     * @var PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType|null
     */
    private $paymentMethod;

    /**
     * @var int|null
     */
    private $transactionId;

    /**
     * Returns Memo.
     * The payment memo
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * The payment memo
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
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
    public function getOriginalAmount(): ?string
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
     * @maps original_amount
     */
    public function setOriginalAmount(?string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * Returns Applied Amount.
     * The amount of the payment applied to this invoice. Incoming payments can be split amongst several
     * invoices, which will result in a `applied_amount` less than the `original_amount`. Example: A $100.
     * 99 payment, of which $40.11 is applied to this invoice, will have an `applied_amount` of `"40.11"`.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * The amount of the payment applied to this invoice. Incoming payments can be split amongst several
     * invoices, which will result in a `applied_amount` less than the `original_amount`. Example: A $100.
     * 99 payment, of which $40.11 is applied to this invoice, will have an `applied_amount` of `"40.11"`.
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Returns Transaction Time.
     * The time the payment was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     */
    public function getTransactionTime(): ?\DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     * The time the payment was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     *
     * @maps transaction_time
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionTime(?\DateTime $transactionTime): void
    {
        $this->transactionTime = $transactionTime;
    }

    /**
     * Returns Payment Method.
     * A nested data structure detailing the method of payment
     *
     * @return PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     * A nested data structure detailing the method of payment
     *
     * @maps payment_method
     * @mapsBy anyOf(oneOf(PaymentMethodApplePayType,PaymentMethodBankAccountType,PaymentMethodCreditCardType,PaymentMethodExternalType,PaymentMethodPaypalType),null)
     *
     * @param PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType|null $paymentMethod
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
        if (isset($this->memo)) {
            $json['memo']             = $this->memo;
        }
        if (isset($this->originalAmount)) {
            $json['original_amount']  = $this->originalAmount;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']   = $this->appliedAmount;
        }
        if (isset($this->transactionTime)) {
            $json['transaction_time'] = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        }
        if (isset($this->paymentMethod)) {
            $json['payment_method']   =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->paymentMethod,
                    'anyOf(oneOf(PaymentMethodApplePayType,PaymentMethodBankAccountType,PaymentMethod' .
                    'CreditCardType,PaymentMethodExternalType,PaymentMethodPaypalType),null)'
                );
        }
        if (isset($this->transactionId)) {
            $json['transaction_id']   = $this->transactionId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
