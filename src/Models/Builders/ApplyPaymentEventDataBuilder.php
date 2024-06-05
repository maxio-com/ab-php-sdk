<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyPaymentEventData;
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
     * Initializes a new apply payment event data Builder object.
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
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Sets parent invoice number field.
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
     */
    public function prepayment(?bool $value): self
    {
        $this->instance->setPrepayment($value);
        return $this;
    }

    /**
     * Sets external field.
     */
    public function external(?bool $value): self
    {
        $this->instance->setExternal($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new apply payment event data object.
     */
    public function build(): ApplyPaymentEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
