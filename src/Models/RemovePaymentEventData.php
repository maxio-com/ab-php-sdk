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
 * Example schema for an `remove_payment` event
 */
class RemovePaymentEventData implements \JsonSerializable
{
    /**
     * @var int
     */
    private $transactionId;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var string|null
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
     * @var bool
     */
    private $prepayment;

    /**
     * @param int $transactionId
     * @param string $memo
     * @param string $appliedAmount
     * @param \DateTime $transactionTime
     * @param PaymentMethodApplePayType|PaymentMethodBankAccountType|PaymentMethodCreditCardType|PaymentMethodExternalType|PaymentMethodPaypalType $paymentMethod
     * @param bool $prepayment
     */
    public function __construct(
        int $transactionId,
        string $memo,
        string $appliedAmount,
        \DateTime $transactionTime,
        $paymentMethod,
        bool $prepayment
    ) {
        $this->transactionId = $transactionId;
        $this->memo = $memo;
        $this->appliedAmount = $appliedAmount;
        $this->transactionTime = $transactionTime;
        $this->paymentMethod = $paymentMethod;
        $this->prepayment = $prepayment;
    }

    /**
     * Returns Transaction Id.
     * Transaction ID of the original payment that was removed
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * Transaction ID of the original payment that was removed
     *
     * @required
     * @maps transaction_id
     */
    public function setTransactionId(int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Memo.
     * Memo of the original payment
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * Memo of the original payment
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
     * Full amount of the original payment
     */
    public function getOriginalAmount(): ?string
    {
        return $this->originalAmount;
    }

    /**
     * Sets Original Amount.
     * Full amount of the original payment
     *
     * @maps original_amount
     */
    public function setOriginalAmount(?string $originalAmount): void
    {
        $this->originalAmount = $originalAmount;
    }

    /**
     * Returns Applied Amount.
     * Applied amount of the original payment
     */
    public function getAppliedAmount(): string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * Applied amount of the original payment
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
     * Transaction time of the original payment, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     */
    public function getTransactionTime(): \DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     * Transaction time of the original payment, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
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
     * Returns Prepayment.
     * The flag that shows whether the original payment was a prepayment or not
     */
    public function getPrepayment(): bool
    {
        return $this->prepayment;
    }

    /**
     * Sets Prepayment.
     * The flag that shows whether the original payment was a prepayment or not
     *
     * @required
     * @maps prepayment
     */
    public function setPrepayment(bool $prepayment): void
    {
        $this->prepayment = $prepayment;
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
        $json['transaction_id']      = $this->transactionId;
        $json['memo']                = $this->memo;
        if (isset($this->originalAmount)) {
            $json['original_amount'] = $this->originalAmount;
        }
        $json['applied_amount']      = $this->appliedAmount;
        $json['transaction_time']    = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        $json['payment_method']      =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->paymentMethod,
                'anyOf(PaymentMethodApplePayType,PaymentMethodBankAccountType,PaymentMethodCreditCard' .
                'Type,PaymentMethodExternalType,PaymentMethodPaypalType)'
            );
        $json['prepayment']          = $this->prepayment;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
