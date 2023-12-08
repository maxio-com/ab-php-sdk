<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RemovePaymentEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model RemovePaymentEventData
 *
 * @see RemovePaymentEventData
 */
class RemovePaymentEventDataBuilder
{
    /**
     * @var RemovePaymentEventData
     */
    private $instance;

    private function __construct(RemovePaymentEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new remove payment event data Builder object.
     */
    public static function init(): self
    {
        return new self(new RemovePaymentEventData());
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
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets original amount field.
     */
    public function originalAmount(?string $value): self
    {
        $this->instance->setOriginalAmount($value);
        return $this;
    }

    /**
     * Sets applied amount field.
     */
    public function appliedAmount(?string $value): self
    {
        $this->instance->setAppliedAmount($value);
        return $this;
    }

    /**
     * Sets transaction time field.
     */
    public function transactionTime(?\DateTime $value): self
    {
        $this->instance->setTransactionTime($value);
        return $this;
    }

    /**
     * Sets payment method field.
     */
    public function paymentMethod($value): self
    {
        $this->instance->setPaymentMethod($value);
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
     * Initializes a new remove payment event data object.
     */
    public function build(): RemovePaymentEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
