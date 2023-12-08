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
     * @var int|null
     */
    private $transactionId;

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
     * @var bool|null
     */
    private $prepayment;

    /**
     * Returns Transaction Id.
     * Transaction ID of the original payment that was removed
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * Transaction ID of the original payment that was removed
     *
     * @maps transaction_id
     */
    public function setTransactionId(?int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Memo.
     * Memo of the original payment
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * Memo of the original payment
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
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
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * Applied amount of the original payment
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Returns Transaction Time.
     * Transaction time of the original payment, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
     */
    public function getTransactionTime(): ?\DateTime
    {
        return $this->transactionTime;
    }

    /**
     * Sets Transaction Time.
     * Transaction time of the original payment, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z"
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
     * Returns Prepayment.
     * The flag that shows whether the original payment was a prepayment or not
     */
    public function getPrepayment(): ?bool
    {
        return $this->prepayment;
    }

    /**
     * Sets Prepayment.
     * The flag that shows whether the original payment was a prepayment or not
     *
     * @maps prepayment
     */
    public function setPrepayment(?bool $prepayment): void
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
        if (isset($this->transactionId)) {
            $json['transaction_id']   = $this->transactionId;
        }
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
        if (isset($this->prepayment)) {
            $json['prepayment']       = $this->prepayment;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
