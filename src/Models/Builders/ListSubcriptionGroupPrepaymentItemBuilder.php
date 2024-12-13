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
     * Initializes a new List Subcription Group Prepayment Item Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSubcriptionGroupPrepaymentItem());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets subscription group uid field.
     *
     * @param string|null $value
     */
    public function subscriptionGroupUid(?string $value): self
    {
        $this->instance->setSubscriptionGroupUid($value);
        return $this;
    }

    /**
     * Sets amount in cents field.
     *
     * @param int|null $value
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets remaining amount in cents field.
     *
     * @param int|null $value
     */
    public function remainingAmountInCents(?int $value): self
    {
        $this->instance->setRemainingAmountInCents($value);
        return $this;
    }

    /**
     * Sets details field.
     *
     * @param string|null $value
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
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
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets payment type field.
     *
     * @param string|null $value
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
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
     * Initializes a new List Subcription Group Prepayment Item object.
     */
    public function build(): ListSubcriptionGroupPrepaymentItem
    {
        return CoreHelper::clone($this->instance);
    }
}
