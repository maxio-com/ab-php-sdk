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
    private $consolidationLevel;

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
     * @var PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal
     */
    private $paymentMethod;

    /**
     * @var int|null
     */
    private $transactionId;

    /**
     * @var array
     */
    private $parentInvoiceNumber = [];

    /**
     * @var array
     */
    private $remainingPrepaymentAmount = [];

    /**
     * @var bool|null
     */
    private $prepayment;

    /**
     * @var bool|null
     */
    private $external;

    /**
     * @param string $consolidationLevel
     * @param string $memo
     * @param string $originalAmount
     * @param string $appliedAmount
     * @param \DateTime $transactionTime
     * @param PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal $paymentMethod
     */
    public function __construct(
        string $consolidationLevel,
        string $memo,
        string $originalAmount,
        string $appliedAmount,
        \DateTime $transactionTime,
        $paymentMethod
    ) {
        $this->consolidationLevel = $consolidationLevel;
        $this->memo = $memo;
        $this->originalAmount = $originalAmount;
        $this->appliedAmount = $appliedAmount;
        $this->transactionTime = $transactionTime;
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Consolidation Level.
     */
    public function getConsolidationLevel(): string
    {
        return $this->consolidationLevel;
    }

    /**
     * Sets Consolidation Level.
     *
     * @required
     * @maps consolidation_level
     * @factory \AdvancedBillingLib\Models\InvoiceConsolidationLevel::checkValue
     */
    public function setConsolidationLevel(string $consolidationLevel): void
    {
        $this->consolidationLevel = $consolidationLevel;
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
     * @return PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal
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
     * @mapsBy anyOf{type}(PaymentMethodApplePay{applePay},PaymentMethodBankAccount{bankAccount},PaymentMethodCreditCard{creditCard},PaymentMethodExternal{external},PaymentMethodPaypal{paypalAccount})
     *
     * @param PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal $paymentMethod
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
     * Returns Parent Invoice Number.
     */
    public function getParentInvoiceNumber(): ?int
    {
        if (count($this->parentInvoiceNumber) == 0) {
            return null;
        }
        return $this->parentInvoiceNumber['value'];
    }

    /**
     * Sets Parent Invoice Number.
     *
     * @maps parent_invoice_number
     */
    public function setParentInvoiceNumber(?int $parentInvoiceNumber): void
    {
        $this->parentInvoiceNumber['value'] = $parentInvoiceNumber;
    }

    /**
     * Unsets Parent Invoice Number.
     */
    public function unsetParentInvoiceNumber(): void
    {
        $this->parentInvoiceNumber = [];
    }

    /**
     * Returns Remaining Prepayment Amount.
     */
    public function getRemainingPrepaymentAmount(): ?string
    {
        if (count($this->remainingPrepaymentAmount) == 0) {
            return null;
        }
        return $this->remainingPrepaymentAmount['value'];
    }

    /**
     * Sets Remaining Prepayment Amount.
     *
     * @maps remaining_prepayment_amount
     */
    public function setRemainingPrepaymentAmount(?string $remainingPrepaymentAmount): void
    {
        $this->remainingPrepaymentAmount['value'] = $remainingPrepaymentAmount;
    }

    /**
     * Unsets Remaining Prepayment Amount.
     */
    public function unsetRemainingPrepaymentAmount(): void
    {
        $this->remainingPrepaymentAmount = [];
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
     * Returns External.
     */
    public function getExternal(): ?bool
    {
        return $this->external;
    }

    /**
     * Sets External.
     *
     * @maps external
     */
    public function setExternal(?bool $external): void
    {
        $this->external = $external;
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
        $json['consolidation_level']             = InvoiceConsolidationLevel::checkValue($this->consolidationLevel);
        $json['memo']                            = $this->memo;
        $json['original_amount']                 = $this->originalAmount;
        $json['applied_amount']                  = $this->appliedAmount;
        $json['transaction_time']                = DateTimeHelper::toRfc3339DateTime($this->transactionTime);
        $json['payment_method']                  =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->paymentMethod,
                'anyOf{type}(PaymentMethodApplePay{applePay},PaymentMethodBankAccount{bankAccount},Pa' .
                'ymentMethodCreditCard{creditCard},PaymentMethodExternal{external},PaymentMethodPaypa' .
                'l{paypalAccount})'
            );
        if (isset($this->transactionId)) {
            $json['transaction_id']              = $this->transactionId;
        }
        if (!empty($this->parentInvoiceNumber)) {
            $json['parent_invoice_number']       = $this->parentInvoiceNumber['value'];
        }
        if (!empty($this->remainingPrepaymentAmount)) {
            $json['remaining_prepayment_amount'] = $this->remainingPrepaymentAmount['value'];
        }
        if (isset($this->prepayment)) {
            $json['prepayment']                  = $this->prepayment;
        }
        if (isset($this->external)) {
            $json['external']                    = $this->external;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
