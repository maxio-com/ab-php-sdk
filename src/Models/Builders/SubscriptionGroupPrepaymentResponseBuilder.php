<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupPrepaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupPrepaymentResponse
 *
 * @see SubscriptionGroupPrepaymentResponse
 */
class SubscriptionGroupPrepaymentResponseBuilder
{
    /**
     * @var SubscriptionGroupPrepaymentResponse
     */
    private $instance;

    private function __construct(SubscriptionGroupPrepaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group prepayment response Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupPrepaymentResponse());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets amount in cents field.
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets ending balance in cents field.
     */
    public function endingBalanceInCents(?int $value): self
    {
        $this->instance->setEndingBalanceInCents($value);
        return $this;
    }

    /**
     * Sets entry type field.
     */
    public function entryType(?string $value): self
    {
        $this->instance->setEntryType($value);
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
     * Initializes a new subscription group prepayment response object.
     */
    public function build(): SubscriptionGroupPrepaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
