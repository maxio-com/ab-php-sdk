<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyPaymentEventData;
use AdvancedBillingLib\Models\PaymentMethodApplePay;
use AdvancedBillingLib\Models\PaymentMethodBankAccount;
use AdvancedBillingLib\Models\PaymentMethodCreditCard;
use AdvancedBillingLib\Models\PaymentMethodExternal;
use AdvancedBillingLib\Models\PaymentMethodPaypal;
use Core\Utils\CoreHelper;

/**
 * Builder for model ApplyPaymentEventData
 *
 * @see ApplyPaymentEventData
 */
class ApplyPaymentEventDataBuilder
{
    /**
     * @var ApplyPaymentEventData
     */
    private $instance;

    private function __construct(ApplyPaymentEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Apply Payment Event Data Builder object.
     *
     * @param string $consolidationLevel
     * @param string $memo
     * @param string $originalAmount
     * @param string $appliedAmount
     * @param \DateTime $transactionTime
     * @param PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal $paymentMethod
     */
    public static function init(
        string $consolidationLevel,
        string $memo,
        string $originalAmount,
        string $appliedAmount,
        \DateTime $transactionTime,
        $paymentMethod
    ): self {
        return new self(new ApplyPaymentEventData(
            $consolidationLevel,
            $memo,
            $originalAmount,
            $appliedAmount,
            $transactionTime,
            $paymentMethod
        ));
    }

    /**
     * Sets transaction id field.
     *
     * @param int|null $value
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Sets parent invoice number field.
     *
     * @param int|null $value
     */
    public function parentInvoiceNumber(?int $value): self
    {
        $this->instance->setParentInvoiceNumber($value);
        return $this;
    }

    /**
     * Unsets parent invoice number field.
     */
    public function unsetParentInvoiceNumber(): self
    {
        $this->instance->unsetParentInvoiceNumber();
        return $this;
    }

    /**
     * Sets remaining prepayment amount field.
     *
     * @param string|null $value
     */
    public function remainingPrepaymentAmount(?string $value): self
    {
        $this->instance->setRemainingPrepaymentAmount($value);
        return $this;
    }

    /**
     * Unsets remaining prepayment amount field.
     */
    public function unsetRemainingPrepaymentAmount(): self
    {
        $this->instance->unsetRemainingPrepaymentAmount();
        return $this;
    }

    /**
     * Sets prepayment field.
     *
     * @param bool|null $value
     */
    public function prepayment(?bool $value): self
    {
        $this->instance->setPrepayment($value);
        return $this;
    }

    /**
     * Sets external field.
     *
     * @param bool|null $value
     */
    public function external(?bool $value): self
    {
        $this->instance->setExternal($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Apply Payment Event Data object.
     */
    public function build(): ApplyPaymentEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
