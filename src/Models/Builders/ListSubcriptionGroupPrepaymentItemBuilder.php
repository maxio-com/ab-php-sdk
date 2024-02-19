<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSubcriptionGroupPrepaymentItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSubcriptionGroupPrepaymentItem
 *
 * @see ListSubcriptionGroupPrepaymentItem
 */
class ListSubcriptionGroupPrepaymentItemBuilder
{
    /**
     * @var ListSubcriptionGroupPrepaymentItem
     */
    private $instance;

    private function __construct(ListSubcriptionGroupPrepaymentItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list subcription group prepayment item Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSubcriptionGroupPrepaymentItem());
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
     * Sets subscription group uid field.
     */
    public function subscriptionGroupUid(?string $value): self
    {
        $this->instance->setSubscriptionGroupUid($value);
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
     * Sets remaining amount in cents field.
     */
    public function remainingAmountInCents(?int $value): self
    {
        $this->instance->setRemainingAmountInCents($value);
        return $this;
    }

    /**
     * Sets details field.
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
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
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets payment type field.
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Initializes a new list subcription group prepayment item object.
     */
    public function build(): ListSubcriptionGroupPrepaymentItem
    {
        return CoreHelper::clone($this->instance);
    }
}
