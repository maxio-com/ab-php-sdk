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
    public static function init(): self
    {
        return new self(new ApplyPaymentEventData());
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
     * Sets transaction id field.
     */
    public function transactionId(?int $value): self
    {
        $this->instance->setTransactionId($value);
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
