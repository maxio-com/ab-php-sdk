<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ServiceCredit1;
use Core\Utils\CoreHelper;

/**
 * Builder for model ServiceCredit1
 *
 * @see ServiceCredit1
 */
class ServiceCredit1Builder
{
    /**
     * @var ServiceCredit1
     */
    private $instance;

    private function __construct(ServiceCredit1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Service Credit 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new ServiceCredit1());
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
     * Sets ending balance in cents field.
     *
     * @param int|null $value
     */
    public function endingBalanceInCents(?int $value): self
    {
        $this->instance->setEndingBalanceInCents($value);
        return $this;
    }

    /**
     * Sets entry type field.
     *
     * @param string|null $value
     */
    public function entryType(?string $value): self
    {
        $this->instance->setEntryType($value);
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
     * Sets invoice uid field.
     *
     * @param string|null $value
     */
    public function invoiceUid(?string $value): self
    {
        $this->instance->setInvoiceUid($value);
        return $this;
    }

    /**
     * Unsets invoice uid field.
     */
    public function unsetInvoiceUid(): self
    {
        $this->instance->unsetInvoiceUid();
        return $this;
    }

    /**
     * Sets remaining balance in cents field.
     *
     * @param int|null $value
     */
    public function remainingBalanceInCents(?int $value): self
    {
        $this->instance->setRemainingBalanceInCents($value);
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
     * Initializes a new Service Credit 1 object.
     */
    public function build(): ServiceCredit1
    {
        return CoreHelper::clone($this->instance);
    }
}
